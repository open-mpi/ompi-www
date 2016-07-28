<?
$subject_val = "Re: [OMPI users] How to override MPI functions such as MPI_Init, MPI_Recv...";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 13 14:33:24 2009" -->
<!-- isoreceived="20090513183324" -->
<!-- sent="Wed, 13 May 2009 11:33:19 -0700 (PDT)" -->
<!-- isosent="20090513183319" -->
<!-- name="Le Duy Khanh" -->
<!-- email="khanhtn24_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How to override MPI functions such as MPI_Init, MPI_Recv..." -->
<!-- id="903609.89630.qm_at_web58204.mail.re3.yahoo.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="[OMPI users] How to override MPI functions such as MPI_Init, MPI_Recv..." -->
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
<strong>From:</strong> Le Duy Khanh (<em>khanhtn24_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-05-13 14:33:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9328.php">Jeff Squyres: "Re: [OMPI users] How to override MPI functions such as MPI_Init, MPI_Recv..."</a>
<li><strong>Previous message:</strong> <a href="9326.php">Jeff Squyres: "Re: [OMPI users] How to override MPI functions such as MPI_Init, MPI_Recv..."</a>
<li><strong>Maybe in reply to:</strong> <a href="9324.php">Le Duy Khanh: "[OMPI users] How to override MPI functions such as MPI_Init, MPI_Recv..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9328.php">Jeff Squyres: "Re: [OMPI users] How to override MPI functions such as MPI_Init, MPI_Recv..."</a>
<li><strong>Reply:</strong> <a href="9328.php">Jeff Squyres: "Re: [OMPI users] How to override MPI functions such as MPI_Init, MPI_Recv..."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Wow, that's great.
<br>
<p>&#160;You mean that PMPI_* is totally/functionally similar to MPI_*, right ?
<br>
<p>&#160;Thank you so much for your instructions.
<br>
<p>Le , Duy Khanh
<br>
Cellphone: (+84)958521704
<br>
Faculty of Computer Science and Engineering
<br>
Ho Chi Minh city University of Technology , Viet Nam
<br>
<p><p><p>--- On Wed, 5/13/09, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p>From: Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
<br>
Subject: Re: [OMPI users] How to override MPI functions such as MPI_Init, MPI_Recv...
<br>
To: &quot;Open MPI Users&quot; &lt;users_at_[hidden]&gt;
<br>
Date: Wednesday, May 13, 2009, 11:43 AM
<br>
<p>You could just define your own library with the same signatures as official MPI functions, and link that into MPI applications.&#160; Under the covers, you invoke the PMPI_* equivalents of each function.&#160; Lots of profiling and analysis tools work this way.&#160; For example:
<br>
<p>int MPI_Init(int argc, char **argv)
<br>
{
<br>
&#160; &#160; /* do whatever you want to do here */
<br>
&#160; &#160; ret = PMPI_Init(argc, argv);
<br>
&#160; &#160; /* do whatever you want to do here */
<br>
&#160; &#160; return ret;
<br>
}
<br>
<p>compile/link that into libextra_mpi_stuff.a.&#160; Then compile your app with:
<br>
<p>&#160;&#160;&#160;mpicc my_mpi_app.c -lextra_mpi_stuff
<br>
<p>and then when mpi_mpi_app.c calls MPI_Init(), it'll call *your* MPI_Init.&#160; Your MPI_Init will do whatever it wants to, and invoke PMPI_Init() (i.e., the &quot;real&quot; init function) and return back to the user.
<br>
<p>This is the profiling interface of MPI.
<br>
<p><p>On May 13, 2009, at 1:20 PM, Le Duy Khanh wrote:
<br>
<p><span class="quotelev1">&gt; Dear,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;&#160; I intend to override some MPI functions such as MPI_Init, MPI_Recv... but I don't want to dig into OpenMPI source code.Therefore, I am thinking of a way to create a lib called &quot;mympi.h&quot; in which I will #include &quot;mpi.h&quot; to override those functions. I will create a new interface with exactly the same signatures like MPI_Init (because users are familiar with those functions). However, the problem is that I don't know how to override those functions because as I know, C/C++ doesn't allow us to override functions (only overload them).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;&#160; Could you please show me how to override OMPI functions but still keep the same function names and signatures?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;&#160; Thank you so much for your time and consideration
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
<p><p>--Jeff Squyres
<br>
Cisco Systems
<br>
<p>_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-9327/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9328.php">Jeff Squyres: "Re: [OMPI users] How to override MPI functions such as MPI_Init, MPI_Recv..."</a>
<li><strong>Previous message:</strong> <a href="9326.php">Jeff Squyres: "Re: [OMPI users] How to override MPI functions such as MPI_Init, MPI_Recv..."</a>
<li><strong>Maybe in reply to:</strong> <a href="9324.php">Le Duy Khanh: "[OMPI users] How to override MPI functions such as MPI_Init, MPI_Recv..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9328.php">Jeff Squyres: "Re: [OMPI users] How to override MPI functions such as MPI_Init, MPI_Recv..."</a>
<li><strong>Reply:</strong> <a href="9328.php">Jeff Squyres: "Re: [OMPI users] How to override MPI functions such as MPI_Init, MPI_Recv..."</a>
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
