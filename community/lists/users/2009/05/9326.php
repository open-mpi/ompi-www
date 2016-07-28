<?
$subject_val = "Re: [OMPI users] How to override MPI functions such as MPI_Init, MPI_Recv...";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 13 13:43:19 2009" -->
<!-- isoreceived="20090513174319" -->
<!-- sent="Wed, 13 May 2009 13:43:10 -0400" -->
<!-- isosent="20090513174310" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How to override MPI functions such as MPI_Init, MPI_Recv..." -->
<!-- id="930568BC-FEFD-48C5-8F2E-BCFCB35660FC_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="863786.46893.qm_at_web58206.mail.re3.yahoo.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] How to override MPI functions such as MPI_Init, MPI_Recv...<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-05-13 13:43:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9327.php">Le Duy Khanh: "Re: [OMPI users] How to override MPI functions such as MPI_Init, MPI_Recv..."</a>
<li><strong>Previous message:</strong> <a href="9325.php">Durga Choudhury: "Re: [OMPI users] How to override MPI functions such as MPI_Init, MPI_Recv..."</a>
<li><strong>In reply to:</strong> <a href="9324.php">Le Duy Khanh: "[OMPI users] How to override MPI functions such as MPI_Init, MPI_Recv..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9327.php">Le Duy Khanh: "Re: [OMPI users] How to override MPI functions such as MPI_Init, MPI_Recv..."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
You could just define your own library with the same signatures as  
<br>
official MPI functions, and link that into MPI applications.  Under  
<br>
the covers, you invoke the PMPI_* equivalents of each function.  Lots  
<br>
of profiling and analysis tools work this way.  For example:
<br>
<p>int MPI_Init(int argc, char **argv)
<br>
{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* do whatever you want to do here */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ret = PMPI_Init(argc, argv);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* do whatever you want to do here */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return ret;
<br>
}
<br>
<p>compile/link that into libextra_mpi_stuff.a.  Then compile your app  
<br>
with:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;mpicc my_mpi_app.c -lextra_mpi_stuff
<br>
<p>and then when mpi_mpi_app.c calls MPI_Init(), it'll call *your*  
<br>
MPI_Init.  Your MPI_Init will do whatever it wants to, and invoke  
<br>
PMPI_Init() (i.e., the &quot;real&quot; init function) and return back to the  
<br>
user.
<br>
<p>This is the profiling interface of MPI.
<br>
<p><p>On May 13, 2009, at 1:20 PM, Le Duy Khanh wrote:
<br>
<p><span class="quotelev1">&gt; Dear,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  I intend to override some MPI functions such as MPI_Init,  
</span><br>
<span class="quotelev1">&gt; MPI_Recv... but I don't want to dig into OpenMPI source  
</span><br>
<span class="quotelev1">&gt; code.Therefore, I am thinking of a way to create a lib called  
</span><br>
<span class="quotelev1">&gt; &quot;mympi.h&quot; in which I will #include &quot;mpi.h&quot; to override those  
</span><br>
<span class="quotelev1">&gt; functions. I will create a new interface with exactly the same  
</span><br>
<span class="quotelev1">&gt; signatures like MPI_Init (because users are familiar with those  
</span><br>
<span class="quotelev1">&gt; functions). However, the problem is that I don't know how to  
</span><br>
<span class="quotelev1">&gt; override those functions because as I know, C/C++ doesn't allow us  
</span><br>
<span class="quotelev1">&gt; to override functions (only overload them).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Could you please show me how to override OMPI functions but still  
</span><br>
<span class="quotelev1">&gt; keep the same function names and signatures?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Thank you so much for your time and consideration
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Le , Duy Khanh
</span><br>
<span class="quotelev1">&gt; Cellphone: (+84)958521704
</span><br>
<span class="quotelev1">&gt; Faculty of Computer Science and Engineering
</span><br>
<span class="quotelev1">&gt; Ho Chi Minh city University of Technology , Viet Nam
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
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9327.php">Le Duy Khanh: "Re: [OMPI users] How to override MPI functions such as MPI_Init, MPI_Recv..."</a>
<li><strong>Previous message:</strong> <a href="9325.php">Durga Choudhury: "Re: [OMPI users] How to override MPI functions such as MPI_Init, MPI_Recv..."</a>
<li><strong>In reply to:</strong> <a href="9324.php">Le Duy Khanh: "[OMPI users] How to override MPI functions such as MPI_Init, MPI_Recv..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9327.php">Le Duy Khanh: "Re: [OMPI users] How to override MPI functions such as MPI_Init, MPI_Recv..."</a>
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
