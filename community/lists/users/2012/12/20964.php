<?
$subject_val = "Re: [OMPI users] question to scattering an object in openmpi-1.9a1r27380";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Dec 15 07:51:08 2012" -->
<!-- isoreceived="20121215125108" -->
<!-- sent="Sat, 15 Dec 2012 07:51:00 -0500" -->
<!-- isosent="20121215125100" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] question to scattering an object in openmpi-1.9a1r27380" -->
<!-- id="A1149CE4-751B-481F-B4D4-1ADBEEA7D909_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="201210111141.q9BBepV9025915_at_tyr.informatik.hs-fulda.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] question to scattering an object in openmpi-1.9a1r27380<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-12-15 07:51:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20965.php">Jeff Squyres: "Re: [OMPI users] questions to some open problems"</a>
<li><strong>Previous message:</strong> <a href="20963.php">Jeff Squyres: "Re: [OMPI users] Possible memory error"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/10/20466.php">Siegmar Gross: "[OMPI users] question to scattering an object in openmpi-1.9a1r27380"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Greetings Siegmar; sorry for the horrid delay in replying.  :-(
<br>
<p>Ralph opened a ticket about this a while ago (<a href="https://svn.open-mpi.org/trac/ompi/ticket/3351">https://svn.open-mpi.org/trac/ompi/ticket/3351</a>).  I answered it this morning -- see the ticket for the details.
<br>
<p>Short version: I don't think that your program is correct.
<br>
<p><p>On Oct 11, 2012, at 7:40 AM, Siegmar Gross wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have built openmpi-1.9a1r27380 with Java support and try some small
</span><br>
<span class="quotelev1">&gt; programs. When I try to scatter an object, I get a ClassCastException.
</span><br>
<span class="quotelev1">&gt; I use the following object.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; public class MyData implements java.io.Serializable
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;  static final long serialVersionUID = -5243516570672186644L;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  private int	 age;
</span><br>
<span class="quotelev1">&gt;  private String name;
</span><br>
<span class="quotelev1">&gt;  private double salary;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  public MyData ()
</span><br>
<span class="quotelev1">&gt;  {
</span><br>
<span class="quotelev1">&gt;    age    = 0;
</span><br>
<span class="quotelev1">&gt;    name   = &quot;&quot;;
</span><br>
<span class="quotelev1">&gt;    salary = 0.0;
</span><br>
<span class="quotelev1">&gt;  }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  public void setAge (int newAge)
</span><br>
<span class="quotelev1">&gt;  {
</span><br>
<span class="quotelev1">&gt;    age = newAge;
</span><br>
<span class="quotelev1">&gt;  }
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I use the following main program.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; import mpi.*;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; public class ObjectScatterMain
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;  public static void main (String args[]) throws MPIException
</span><br>
<span class="quotelev1">&gt;  {
</span><br>
<span class="quotelev1">&gt;    int	   mytid;			/* my task id			*/
</span><br>
<span class="quotelev1">&gt;    MyData dataItem, objBuffer;
</span><br>
<span class="quotelev1">&gt;    String processor_name;		/* name of local machine	*/
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    MPI.Init (args);
</span><br>
<span class="quotelev1">&gt;    processor_name = MPI.Get_processor_name ();
</span><br>
<span class="quotelev1">&gt;    mytid	   = MPI.COMM_WORLD.Rank ();
</span><br>
<span class="quotelev1">&gt;    dataItem	   = new MyData ();
</span><br>
<span class="quotelev1">&gt;    objBuffer	   = new MyData ();
</span><br>
<span class="quotelev1">&gt;    if (mytid == 0)
</span><br>
<span class="quotelev1">&gt;    {
</span><br>
<span class="quotelev1">&gt;      /* initialize data item						*/
</span><br>
<span class="quotelev1">&gt;      dataItem.setAge (35);
</span><br>
<span class="quotelev1">&gt;      dataItem.setName (&quot;Smith&quot;);
</span><br>
<span class="quotelev1">&gt;      dataItem.setSalary (2545.75);
</span><br>
<span class="quotelev1">&gt;    }
</span><br>
<span class="quotelev1">&gt;    MPI.COMM_WORLD.Scatter (dataItem, 0, 1, MPI.OBJECT,
</span><br>
<span class="quotelev1">&gt; 			    objBuffer, 0, 1, MPI.OBJECT, 0);
</span><br>
<span class="quotelev1">&gt;    /* Each process prints its received data item. The outputs
</span><br>
<span class="quotelev1">&gt;     * can intermingle on the screen so that you must use
</span><br>
<span class="quotelev1">&gt;     * &quot;-output-filename&quot; in Open MPI.
</span><br>
<span class="quotelev1">&gt;     */
</span><br>
<span class="quotelev1">&gt;    System.out.printf (&quot;\nProcess %d running on %s.\n&quot; +
</span><br>
<span class="quotelev1">&gt; 		       &quot;  Age:  %d\n&quot; +
</span><br>
<span class="quotelev1">&gt; 		       &quot;  Name: %s\n&quot; +
</span><br>
<span class="quotelev1">&gt; 		       &quot;  Salary: %10.2f\n&quot;,
</span><br>
<span class="quotelev1">&gt; 		       mytid, processor_name,
</span><br>
<span class="quotelev1">&gt; 		       objBuffer.getAge (),
</span><br>
<span class="quotelev1">&gt; 		       objBuffer.getName (),
</span><br>
<span class="quotelev1">&gt; 		       objBuffer.getSalary ());
</span><br>
<span class="quotelev1">&gt;    MPI.Finalize();
</span><br>
<span class="quotelev1">&gt;  }
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I get the following error, when I compile and run the program.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; tyr java 218 mpijavac ObjectScatterMain.java
</span><br>
<span class="quotelev1">&gt; tyr java 219 mpiexec java ObjectScatterMain
</span><br>
<span class="quotelev1">&gt; Exception in thread &quot;main&quot; java.lang.ClassCastException:
</span><br>
<span class="quotelev1">&gt;  MyData cannot be cast to [Ljava.lang.Object;
</span><br>
<span class="quotelev1">&gt;        at mpi.Intracomm.copyBuffer(Intracomm.java:119)
</span><br>
<span class="quotelev1">&gt;        at mpi.Intracomm.Scatter(Intracomm.java:389)
</span><br>
<span class="quotelev1">&gt;        at ObjectScatterMain.main(ObjectScatterMain.java:45)
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpiexec has exited due to process rank 0 with PID 25898 on
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Has anybody an idea why I get a ClassCastException or how I must define
</span><br>
<span class="quotelev1">&gt; an object, which I can use in a scatter operation? Thank you very much
</span><br>
<span class="quotelev1">&gt; for any help in advance.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Kind regards
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Siegmar
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20965.php">Jeff Squyres: "Re: [OMPI users] questions to some open problems"</a>
<li><strong>Previous message:</strong> <a href="20963.php">Jeff Squyres: "Re: [OMPI users] Possible memory error"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/10/20466.php">Siegmar Gross: "[OMPI users] question to scattering an object in openmpi-1.9a1r27380"</a>
<!-- nextthread="start" -->
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
