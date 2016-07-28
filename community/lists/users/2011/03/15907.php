<?
$subject_val = "Re: [OMPI users] Potential bug in creating MPI_GROUP_EMPTY handling";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar 18 02:07:27 2011" -->
<!-- isoreceived="20110318060727" -->
<!-- sent="Fri, 18 Mar 2011 00:07:22 -0600" -->
<!-- isosent="20110318060722" -->
<!-- name="Jack Bryan" -->
<!-- email="dtustudy68_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Potential bug in creating MPI_GROUP_EMPTY handling" -->
<!-- id="SNT134-w58793744DBF156962AF031CBB00_at_phx.gbl" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="4D828DDF.9020906_at_math.tu-dortmund.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] Potential bug in creating MPI_GROUP_EMPTY handling<br>
<strong>From:</strong> Jack Bryan (<em>dtustudy68_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-03-18 02:07:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15908.php">Jack Bryan: "[OMPI users] OMPI free() error"</a>
<li><strong>Previous message:</strong> <a href="15906.php">Dominik Goeddeke: "Re: [OMPI users] Potential bug in creating MPI_GROUP_EMPTY handling"</a>
<li><strong>In reply to:</strong> <a href="15906.php">Dominik Goeddeke: "Re: [OMPI users] Potential bug in creating MPI_GROUP_EMPTY handling"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; Date: Thu, 17 Mar 2011 23:40:31 +0100
</span><br>
<span class="quotelev1">&gt; From: dominik.goeddeke_at_[hidden]
</span><br>
<span class="quotelev1">&gt; To: users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] Potential bug in creating MPI_GROUP_EMPTY handling
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; glad we could help and the two hours of stripping things down were 
</span><br>
<span class="quotelev1">&gt; effectively not wasted. Also good to hear (implicitly) that we were not 
</span><br>
<span class="quotelev1">&gt; too stupid to understand the MPI standard...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Since to the best of my understanding, our workaround is practically 
</span><br>
<span class="quotelev1">&gt; overhead-free, we went ahead and coded everything up analogously to the 
</span><br>
<span class="quotelev1">&gt; workaround, i.e. we don't rely on / wait for an immediate fix.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Please let us know if further information is needed.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; dom
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 03/17/2011 05:10 PM, Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Sorry for the late reply, but many thanks for the bug report and reliable reproducer.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I've confirmed the problem and filed a bug about this:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;       <a href="https://svn.open-mpi.org/trac/ompi/ticket/2752">https://svn.open-mpi.org/trac/ompi/ticket/2752</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Mar 6, 2011, at 6:12 PM, Dominik Goeddeke wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; The attached example code (stripped down from a bigger app) demonstrates a way to trigger a severe crash in all recent ompi releases but not in a bunch of latest MPICH2 releases. The code is minimalistic and boils down to the call
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; MPI_Comm_create(MPI_COMM_WORLD, MPI_GROUP_EMPTY,&amp;dummy_comm);
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; which isn't supposed to be illegal. Please refer to the (well-documented) code for details on the high-dimensional cross product I tested (on ubuntu 10.04 LTS), a potential workaround (which isn't supposed to be necessary I think) and an exemplary stack trace.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Instructions: mpicc test.c -Wall -O0&amp;&amp;  mpirun -np 2 ./a.out
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Thanks!
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; dom
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &lt;test.c&gt;_______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Dr. Dominik G&#246;ddeke
</span><br>
<span class="quotelev1">&gt; Institut f&#252;r Angewandte Mathematik
</span><br>
<span class="quotelev1">&gt; Technische Universit&#228;t Dortmund
</span><br>
<span class="quotelev1">&gt; <a href="http://www.mathematik.tu-dortmund.de/~goeddeke">http://www.mathematik.tu-dortmund.de/~goeddeke</a>
</span><br>
<span class="quotelev1">&gt; Tel. +49-(0)231-755-7218  Fax +49-(0)231-755-5933
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
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
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-15907/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15908.php">Jack Bryan: "[OMPI users] OMPI free() error"</a>
<li><strong>Previous message:</strong> <a href="15906.php">Dominik Goeddeke: "Re: [OMPI users] Potential bug in creating MPI_GROUP_EMPTY handling"</a>
<li><strong>In reply to:</strong> <a href="15906.php">Dominik Goeddeke: "Re: [OMPI users] Potential bug in creating MPI_GROUP_EMPTY handling"</a>
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
