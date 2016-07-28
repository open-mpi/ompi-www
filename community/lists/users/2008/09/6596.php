<?
$subject_val = "Re: [OMPI users] what is inside mpicc/mpic++";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep 18 01:46:23 2008" -->
<!-- isoreceived="20080918054623" -->
<!-- sent="Wed, 17 Sep 2008 22:46:19 -0700 (PDT)" -->
<!-- isosent="20080918054619" -->
<!-- name="Shafagh Jafer" -->
<!-- email="barfy27_at_[hidden]" -->
<!-- subject="Re: [OMPI users] what is inside mpicc/mpic++" -->
<!-- id="119470.61057.qm_at_web34803.mail.mud.yahoo.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="1221716153.5625.68.camel_at_rscpc28.anu.edu.au" -->
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
<strong>Subject:</strong> Re: [OMPI users] what is inside mpicc/mpic++<br>
<strong>From:</strong> Shafagh Jafer (<em>barfy27_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-09-18 01:46:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6597.php">Sofia Aparicio Secanellas: "Re: [OMPI users] Problem with MPI_Send and MPI_Recv"</a>
<li><strong>Previous message:</strong> <a href="6595.php">Terry Frankcombe: "Re: [OMPI users] what is inside mpicc/mpic++"</a>
<li><strong>In reply to:</strong> <a href="6595.php">Terry Frankcombe: "Re: [OMPI users] what is inside mpicc/mpic++"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6601.php">Jeff Squyres: "Re: [OMPI users] what is inside mpicc/mpic++"</a>
<li><strong>Reply:</strong> <a href="6601.php">Jeff Squyres: "Re: [OMPI users] what is inside mpicc/mpic++"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks a lot. The problem i have is that i have installed openmpi-1.2.7 and every thing went well and i tested hello_c and ring_c. But the problem now is that when i use open mpi's mpicc and mpic++ in my Makefile&#160;i get errors&#160;reported from inside openmpi's source code. I am attaching my Makefile and here&#160;I paste&#160;a snapshot of the errors&#160;I&#160;get:
<br>
=========================================================
<br>
In file included from /opt/openmpi/1.2.7/include/mpi.h:1795,
<br>
&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; from stdaload.cpp:33:
<br>
/opt/openmpi/1.2.7/include/openmpi/ompi/mpi/cxx/mpicxx.h:136: parse error before `1'
<br>
In file included from /opt/openmpi/1.2.7/include/openmpi/ompi/mpi/cxx/mpicxx.h:168,
<br>
&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; from /opt/openmpi/1.2.7/include/mpi.h:1795,
<br>
&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; from stdaload.cpp:33:
<br>
/opt/openmpi/1.2.7/include/openmpi/ompi/mpi/cxx/functions.h:143: parse error before `1'
<br>
In file included from /opt/openmpi/1.2.7/include/openmpi/ompi/mpi/cxx/mpicxx.h:195,
<br>
&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; from /opt/openmpi/1.2.7/include/mpi.h:1795,
<br>
&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; from stdaload.cpp:33:
<br>
/opt/openmpi/1.2.7/include/openmpi/ompi/mpi/cxx/status.h:26: parse error before `::'
<br>
/opt/openmpi/1.2.7/include/openmpi/ompi/mpi/cxx/status.h:27: parse error before `::'
<br>
/opt/openmpi/1.2.7/include/openmpi/ompi/mpi/cxx/status.h:28: parse error before `::'
<br>
/opt/openmpi/1.2.7/include/openmpi/ompi/mpi/cxx/status.h:102: parse error before `1'
<br>
In file included from /opt/openmpi/1.2.7/include/openmpi/ompi/mpi/cxx/mpicxx.h:196,
<br>
&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; from /opt/openmpi/1.2.7/include/mpi.h:1795,
<br>
&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; from stdaload.cpp:33:
<br>
/opt/openmpi/1.2.7/include/openmpi/ompi/mpi/cxx/request.h:200: parse error before `1'
<br>
/opt/openmpi/1.2.7/include/openmpi/ompi/mpi/cxx/request.h:206: parse error before `('
<br>
...
<br>
=========================================================&#160;
<br>
Please help me. I am being turtured by this errors and can't resolve them :-(
<br>
--- On Wed, 9/17/08, Terry Frankcombe &lt;terry_at_[hidden]&gt; wrote:
<br>
<p>From: Terry Frankcombe &lt;terry_at_[hidden]&gt;
<br>
Subject: Re: [OMPI users] what is inside mpicc/mpic++
<br>
To: &quot;Open MPI Users&quot; &lt;users_at_[hidden]&gt;
<br>
Date: Wednesday, September 17, 2008, 10:35 PM
<br>
<p>In OMPI these are binaries, not scripts.  Not human readable.
<br>
<p><p>[tjf_at_rscpc28 NH2+]$ ll /usr/local/bin/mpif90
<br>
lrwxrwxrwx 1 root root 12 2008-03-05 14:39 /usr/local/bin/mpif90 -&gt;
<br>
opal_wrapper*
<br>
[tjf_at_rscpc28 NH2+]$ file /usr/local/bin/opal_wrapper
<br>
/usr/local/bin/opal_wrapper: ELF 32-bit LSB executable, Intel 80386, version 1
<br>
(SYSV), for GNU/Linux 2.6.8, dynamically linked (uses shared libs), not stripped
<br>
<p><p><p><p>On Wed, 2008-09-17 at 22:31 -0700, Shafagh Jafer wrote:
<br>
<span class="quotelev1">&gt;         I am trying to figure out a problem that i am stuck in :-( could
</span><br>
anyone please tell me how their mpicc/mpic++ looks like? is there any thing
<br>
readable inside these files?because mine look corrupted and are filled with
<br>
unreadable charachters.
<br>
<span class="quotelev1">&gt;         Please let me know.
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
<p>_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<p>
<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-6596/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-6596/Makefile.common">Makefile.common</a>
</ul>
<!-- attachment="Makefile.common" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6597.php">Sofia Aparicio Secanellas: "Re: [OMPI users] Problem with MPI_Send and MPI_Recv"</a>
<li><strong>Previous message:</strong> <a href="6595.php">Terry Frankcombe: "Re: [OMPI users] what is inside mpicc/mpic++"</a>
<li><strong>In reply to:</strong> <a href="6595.php">Terry Frankcombe: "Re: [OMPI users] what is inside mpicc/mpic++"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6601.php">Jeff Squyres: "Re: [OMPI users] what is inside mpicc/mpic++"</a>
<li><strong>Reply:</strong> <a href="6601.php">Jeff Squyres: "Re: [OMPI users] what is inside mpicc/mpic++"</a>
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
