using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.UI;
using System.Web.UI.WebControls;
using System.Web.Script.Serialization;
using System.Web.Services;
using System.Data;
using System.Data.SqlClient;
using System.Configuration;

namespace Race
{
    public partial class race : System.Web.UI.Page
    {
        protected void Page_Load(object sender, EventArgs e)
        {

        }

        [WebMethod]
        public static string[] GetPosition()
        {
            try
            {
                List<Posicion> poslist = GetPos();
                string[] array = new string[poslist.Count];
                int i = 0;
                foreach (Posicion posicion in poslist)
                {
                    var jss = new JavaScriptSerializer();
                    string serializedPerson = jss.Serialize(posicion);
                    array[i] = serializedPerson;
                    i++;
                }
                return array;
            }
            catch
            {
                return null;
            }
        }

        public static DataSet GetPosAll()
        {
            DataSet result = new DataSet();
            try
            {
                string connStr = ConfigurationManager.ConnectionStrings["ConnectionString"].ConnectionString;

                SqlConnection con = new SqlConnection(connStr);
                con.Open();

                SqlCommand sqlcmd = new SqlCommand("sp_getPosAll");
                sqlcmd.CommandType = CommandType.StoredProcedure;
                sqlcmd.Connection = con;

                SqlDataAdapter sqlad = new SqlDataAdapter(sqlcmd);
                sqlad.Fill(result);
                sqlcmd.Dispose();
                con.Close();
            }
            catch { }
            return result;
        }

        public static List<Posicion> GetPos()
        {
            List<Posicion> poslist = new List<Posicion>();
            int x = 0;
            foreach (DataRow row in GetPosAll().Tables[0].Rows)
            {
                Posicion pos = new Posicion();
                pos.idGPS = Convert.ToInt32(row["idGPS"].ToString());
                pos.nombre = row["nombre"].ToString();
                pos.IMEI = row["IMEI"].ToString();
                pos.fechaposUTC = Convert.ToDateTime(row["fechaposUTC"]);
                pos.latitud = row["latitud"].ToString();
                pos.longitud = row["longitud"].ToString();
                pos.velocidad = Convert.ToInt32(row["velocidad"]);
                pos.rumbo = Convert.ToInt32(row["rumbo"]);
                pos.time = Convert.ToInt64(row["time"]);
                poslist.Insert(x, pos);
                x++;
            }
            return poslist;
        }
    }
    public class Posicion
    {
        public int idGPS { get; set; }
        public string nombre { get; set; }
        public string IMEI { get; set; }
        public DateTime fechaposUTC { get; set; }
        public string latitud { get; set; }
        public string longitud { get; set; }
        public int velocidad { get; set; }
        public int rumbo { get; set; }
        public Int64 time { get; set; }
    }
}