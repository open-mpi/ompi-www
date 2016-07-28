<?
$subject_val = "[OMPI users] question to scattering an object in openmpi-1.9a1r27380";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct 11 07:47:50 2012" -->
<!-- isoreceived="20121011114750" -->
<!-- sent="Thu, 11 Oct 2012 13:40:51 +0200 (CEST)" -->
<!-- isosent="20121011114051" -->
<!-- name="Siegmar Gross" -->
<!-- email="Siegmar.Gross_at_[hidden]" -->
<!-- subject="[OMPI users] question to scattering an object in openmpi-1.9a1r27380" -->
<!-- id="201210111141.q9BBepV9025915_at_tyr.informatik.hs-fulda.de" -->
<!-- charset="us-ascii" -->
<!-- expires="-1" -->
<div class="center">
<table border="2" width="100%" class="links">
<tr>
<th><a href="date.php">Date view</a></th>
<th><a href="index.php">Thread view</a></th>
<th><a href="subject.php">Subject view</a></th>
<th><a href="author.php">Author view</a></th>
</tr>
</table>
</div>
<p class="headers">
<strong>Subject:</strong> [OMPI users] question to scattering an object in openmpi-1.9a1r27380<br>
<strong>From:</strong> Siegmar Gross (<em>Siegmar.Gross_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-10-11 07:40:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20467.php">Biddiscombe, John A.: "Re: [OMPI users] windows + threads"</a>
<li><strong>Previous message:</strong> <a href="20465.php">Siegmar Gross: "Re: [OMPI users] internal error with mpiJava in openmpi-1.9a1r27380"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/12/20964.php">Jeff Squyres: "Re: [OMPI users] question to scattering an object in openmpi-1.9a1r27380"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/12/20964.php">Jeff Squyres: "Re: [OMPI users] question to scattering an object in openmpi-1.9a1r27380"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I have built openmpi-1.9a1r27380 with Java support and try some small
<br>
programs. When I try to scatter an object, I get a ClassCastException.
<br>
I use the following object.
<br>
<p>public class MyData implements java.io.Serializable
<br>
{
<br>
&nbsp;&nbsp;static final long serialVersionUID = -5243516570672186644L;
<br>
<p>&nbsp;&nbsp;private int	 age;
<br>
&nbsp;&nbsp;private String name;
<br>
&nbsp;&nbsp;private double salary;
<br>
<p>&nbsp;&nbsp;public MyData ()
<br>
&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;age    = 0;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;name   = &quot;&quot;;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;salary = 0.0;
<br>
&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;public void setAge (int newAge)
<br>
&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;age = newAge;
<br>
&nbsp;&nbsp;}
<br>
...
<br>
}
<br>
<p><p>I use the following main program.
<br>
<p>import mpi.*;
<br>
<p>public class ObjectScatterMain
<br>
{
<br>
&nbsp;&nbsp;public static void main (String args[]) throws MPIException
<br>
&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;int	   mytid;			/* my task id			*/
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MyData dataItem, objBuffer;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;String processor_name;		/* name of local machine	*/
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;MPI.Init (args);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;processor_name = MPI.Get_processor_name ();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;mytid	   = MPI.COMM_WORLD.Rank ();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;dataItem	   = new MyData ();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;objBuffer	   = new MyData ();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;if (mytid == 0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* initialize data item						*/
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;dataItem.setAge (35);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;dataItem.setName (&quot;Smith&quot;);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;dataItem.setSalary (2545.75);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI.COMM_WORLD.Scatter (dataItem, 0, 1, MPI.OBJECT,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;objBuffer, 0, 1, MPI.OBJECT, 0);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;/* Each process prints its received data item. The outputs
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* can intermingle on the screen so that you must use
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* &quot;-output-filename&quot; in Open MPI.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*/
<br>
&nbsp;&nbsp;&nbsp;&nbsp;System.out.printf (&quot;\nProcess %d running on %s.\n&quot; +
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&quot;  Age:  %d\n&quot; +
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&quot;  Name: %s\n&quot; +
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&quot;  Salary: %10.2f\n&quot;,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mytid, processor_name,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;objBuffer.getAge (),
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;objBuffer.getName (),
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;objBuffer.getSalary ());
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI.Finalize();
<br>
&nbsp;&nbsp;}
<br>
}
<br>
<p><p>I get the following error, when I compile and run the program.
<br>
<p>tyr java 218 mpijavac ObjectScatterMain.java
<br>
tyr java 219 mpiexec java ObjectScatterMain
<br>
Exception in thread &quot;main&quot; java.lang.ClassCastException:
<br>
&nbsp;&nbsp;MyData cannot be cast to [Ljava.lang.Object;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;at mpi.Intracomm.copyBuffer(Intracomm.java:119)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;at mpi.Intracomm.Scatter(Intracomm.java:389)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;at ObjectScatterMain.main(ObjectScatterMain.java:45)
<br>
--------------------------------------------------------------------------
<br>
mpiexec has exited due to process rank 0 with PID 25898 on
<br>
...
<br>
<p><p>Has anybody an idea why I get a ClassCastException or how I must define
<br>
an object, which I can use in a scatter operation? Thank you very much
<br>
for any help in advance.
<br>
<p><p>Kind regards
<br>
<p>Siegmar
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20467.php">Biddiscombe, John A.: "Re: [OMPI users] windows + threads"</a>
<li><strong>Previous message:</strong> <a href="20465.php">Siegmar Gross: "Re: [OMPI users] internal error with mpiJava in openmpi-1.9a1r27380"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/12/20964.php">Jeff Squyres: "Re: [OMPI users] question to scattering an object in openmpi-1.9a1r27380"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/12/20964.php">Jeff Squyres: "Re: [OMPI users] question to scattering an object in openmpi-1.9a1r27380"</a>
<!-- reply="end" -->
</ul>
<div class="center">
<table border="2" width="100%" class="links">
<tr>
<th><a href="date.php">Date view</a></th>
<th><a href="index.php">Thread view</a></th>
<th><a href="subject.php">Subject view</a></th>
<th><a href="author.php">Author view</a></th>
</tr>
</table>
</div>
<!-- trailer="footer" -->
<? include("../../include/msg-footer.inc") ?>
