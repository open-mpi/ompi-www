<?
$subject_val = "Re: [OMPI users] what is inside mpicc/mpic++";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep 19 17:29:02 2008" -->
<!-- isoreceived="20080919212902" -->
<!-- sent="Fri, 19 Sep 2008 14:28:58 -0700 (PDT)" -->
<!-- isosent="20080919212858" -->
<!-- name="Shafagh Jafer" -->
<!-- email="barfy27_at_[hidden]" -->
<!-- subject="Re: [OMPI users] what is inside mpicc/mpic++" -->
<!-- id="479416.20642.qm_at_web34806.mail.mud.yahoo.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="D282711F-DD43-41A0-AD14-0F7BC0203FCA_at_cisco.com" -->
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
<strong>Date:</strong> 2008-09-19 17:28:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6626.php">Shafagh Jafer: "[OMPI users] error while loading shared libraries: libmpi_cxx.so.0"</a>
<li><strong>Previous message:</strong> <a href="6624.php">Jeff Squyres: "Re: [OMPI users] Newbie doubt."</a>
<li><strong>In reply to:</strong> <a href="6601.php">Jeff Squyres: "Re: [OMPI users] what is inside mpicc/mpic++"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6626.php">Shafagh Jafer: "[OMPI users] error while loading shared libraries: libmpi_cxx.so.0"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I did the modifications you mentioned and I got it working. Now when I use the mpirun to run an example on one or multiple machines I get the following error:
<br>
=====================================================
<br>
&quot;error while loading shared libraries: libmpi_cxx.so.0: cannot open shared object file: No such file or directory
<br>
=======================================================
<br>
It seems that it can not find libmpi files. I am attaching my makefile.common.
<br>
<p>--- On Thu, 9/18/08, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p>From: Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
<br>
Subject: Re: [OMPI users] what is inside mpicc/mpic++
<br>
To: &quot;Open MPI Users&quot; &lt;users_at_[hidden]&gt;
<br>
Date: Thursday, September 18, 2008, 5:30 AM
<br>
<p>I believe that the problem is your &quot;-DMPI&quot; in your Makefile.  The line
<br>
&nbsp;
<br>
in question in mpicxx.h is:
<br>
<p>namespace MPI {
<br>
<p>When you use -DMPI, the preprocessor replaces this with:
<br>
<p>namespace 1 {
<br>
<p>which is not legal.
<br>
<p>In short, the application using the name &quot;MPI&quot; is illegal.  That name
<br>
&nbsp;
<br>
is reserved for the MPI C++ namespace.  If you change the name to  
<br>
something else (like -DUSE_MPI, and change the source code to match),  
<br>
this particular problem should be solved.
<br>
<p>But then again, I'm not sure why you changed CPP to g++ and CC to gcc;  
<br>
shouldn't they be mpicc?
<br>
<p>It's also not clear from the context of Makefile.common whether CPP is  
<br>
supposed to be the C preprocessor or the C++ compiler.  If it's  
<br>
supposed to be the C preprocessor, then &quot;mpicc -E&quot; would be fine; if 
<br>
<p>it's supposed to be the C++ compiler, then mpic++ (or mpiCC) would be  
<br>
fine.
<br>
<p><p><p>On Sep 18, 2008, at 1:46 AM, Shafagh Jafer wrote:
<br>
<p><span class="quotelev1">&gt; Thanks a lot. The problem i have is that i have installed  
</span><br>
<span class="quotelev1">&gt; openmpi-1.2.7 and every thing went well and i tested hello_c and  
</span><br>
<span class="quotelev1">&gt; ring_c. But the problem now is that when i use open mpi's mpicc and  
</span><br>
<span class="quotelev1">&gt; mpic++ in my Makefile i get errors reported from inside openmpi's  
</span><br>
<span class="quotelev1">&gt; source code. I am attaching my Makefile and here I paste a snapshot  
</span><br>
<span class="quotelev1">&gt; of the errors I get:
</span><br>
<span class="quotelev1">&gt; =========================================================
</span><br>
<span class="quotelev1">&gt; In file included from /opt/openmpi/1.2.7/include/mpi.h:1795,
</span><br>
<span class="quotelev1">&gt;                  from stdaload.cpp:33:
</span><br>
<span class="quotelev1">&gt; /opt/openmpi/1.2.7/include/openmpi/ompi/mpi/cxx/mpicxx.h:136: parse  
</span><br>
<span class="quotelev1">&gt; error before `1'
</span><br>
<span class="quotelev1">&gt; In file included from /opt/openmpi/1.2.7/include/openmpi/ompi/mpi/ 
</span><br>
<span class="quotelev1">&gt; cxx/mpicxx.h:168,
</span><br>
<span class="quotelev1">&gt;                  from /opt/openmpi/1.2.7/include/mpi.h:1795,
</span><br>
<span class="quotelev1">&gt;                  from stdaload.cpp:33:
</span><br>
<span class="quotelev1">&gt; /opt/openmpi/1.2.7/include/openmpi/ompi/mpi/cxx/functions.h:143:  
</span><br>
<span class="quotelev1">&gt; parse error before `1'
</span><br>
<span class="quotelev1">&gt; In file included from /opt/openmpi/1.2.7/include/openmpi/ompi/mpi/ 
</span><br>
<span class="quotelev1">&gt; cxx/mpicxx.h:195,
</span><br>
<span class="quotelev1">&gt;                  from /opt/openmpi/1.2.7/include/mpi.h:1795,
</span><br>
<span class="quotelev1">&gt;                  from stdaload.cpp:33:
</span><br>
<span class="quotelev1">&gt; /opt/openmpi/1.2.7/include/openmpi/ompi/mpi/cxx/status.h:26: parse  
</span><br>
<span class="quotelev1">&gt; error before `::'
</span><br>
<span class="quotelev1">&gt; /opt/openmpi/1.2.7/include/openmpi/ompi/mpi/cxx/status.h:27: parse  
</span><br>
<span class="quotelev1">&gt; error before `::'
</span><br>
<span class="quotelev1">&gt; /opt/openmpi/1.2.7/include/openmpi/ompi/mpi/cxx/status.h:28: parse  
</span><br>
<span class="quotelev1">&gt; error before `::'
</span><br>
<span class="quotelev1">&gt; /opt/openmpi/1.2.7/include/openmpi/ompi/mpi/cxx/status.h:102: parse  
</span><br>
<span class="quotelev1">&gt; error before `1'
</span><br>
<span class="quotelev1">&gt; In file included from /opt/openmpi/1.2.7/include/openmpi/ompi/mpi/ 
</span><br>
<span class="quotelev1">&gt; cxx/mpicxx.h:196,
</span><br>
<span class="quotelev1">&gt;                  from /opt/openmpi/1.2.7/include/mpi.h:1795,
</span><br>
<span class="quotelev1">&gt;                  from stdaload.cpp:33:
</span><br>
<span class="quotelev1">&gt; /opt/openmpi/1.2.7/include/openmpi/ompi/mpi/cxx/request.h:200: parse  
</span><br>
<span class="quotelev1">&gt; error before `1'
</span><br>
<span class="quotelev1">&gt; /opt/openmpi/1.2.7/include/openmpi/ompi/mpi/cxx/request.h:206: parse  
</span><br>
<span class="quotelev1">&gt; error before `('
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; =========================================================
</span><br>
<span class="quotelev1">&gt; Please help me. I am being turtured by this errors and can't resolve  
</span><br>
<span class="quotelev1">&gt; them :-(
</span><br>
<span class="quotelev1">&gt; --- On Wed, 9/17/08, Terry Frankcombe &lt;terry_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; From: Terry Frankcombe &lt;terry_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] what is inside mpicc/mpic++
</span><br>
<span class="quotelev1">&gt; To: &quot;Open MPI Users&quot; &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Date: Wednesday, September 17, 2008, 10:35 PM
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In OMPI these are binaries, not scripts.  Not human readable.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [tjf_at_rscpc28 NH2+]$ ll /usr/local/bin/mpif90
</span><br>
<span class="quotelev1">&gt; lrwxrwxrwx 1 root root 12 2008-03-05 14:39 /usr/local/bin/mpif90 -&gt;
</span><br>
<span class="quotelev1">&gt; opal_wrapper*
</span><br>
<span class="quotelev1">&gt; [tjf_at_rscpc28 NH2+]$ file /usr/local/bin/opal_wrapper
</span><br>
<span class="quotelev1">&gt; /usr/local/bin/opal_wrapper: ELF 32-bit LSB executable, Intel 80386,  
</span><br>
<span class="quotelev1">&gt; version 1
</span><br>
<span class="quotelev1">&gt; (SYSV), for GNU/Linux 2.6.8, dynamically linked (uses shared libs),  
</span><br>
<span class="quotelev1">&gt; not stripped
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Wed, 2008-09-17 at 22:31 -0700, Shafagh Jafer wrote:
</span><br>
<span class="quotelev2">&gt; &gt;         I am trying to figure out a problem that i am stuck in :- 
</span><br>
<span class="quotelev1">&gt; ( could
</span><br>
<span class="quotelev1">&gt; anyone please tell me how their mpicc/mpic++ looks like? is there  
</span><br>
<span class="quotelev1">&gt; any thing
</span><br>
<span class="quotelev1">&gt; readable inside these files?because mine look corrupted and are  
</span><br>
<span class="quotelev1">&gt; filled with
</span><br>
<span class="quotelev1">&gt; unreadable charachters.
</span><br>
<span class="quotelev2">&gt; &gt;         Please let me know.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &lt;Makefile.common&gt;_______________________________________________
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
_______________________________________________
users mailing list
users_at_[hidden]
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
      

</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-6625/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-6625/Makefile.common">Makefile.common</a>
</ul>
<!-- attachment="Makefile.common" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6626.php">Shafagh Jafer: "[OMPI users] error while loading shared libraries: libmpi_cxx.so.0"</a>
<li><strong>Previous message:</strong> <a href="6624.php">Jeff Squyres: "Re: [OMPI users] Newbie doubt."</a>
<li><strong>In reply to:</strong> <a href="6601.php">Jeff Squyres: "Re: [OMPI users] what is inside mpicc/mpic++"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6626.php">Shafagh Jafer: "[OMPI users] error while loading shared libraries: libmpi_cxx.so.0"</a>
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
