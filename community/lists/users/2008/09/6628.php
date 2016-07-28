<?
$subject_val = "Re: [OMPI users] error while loading shared libraries: libmpi_cxx.so.0";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep 19 17:51:37 2008" -->
<!-- isoreceived="20080919215137" -->
<!-- sent="Fri, 19 Sep 2008 14:51:32 -0700 (PDT)" -->
<!-- isosent="20080919215132" -->
<!-- name="Shafagh Jafer" -->
<!-- email="barfy27_at_[hidden]" -->
<!-- subject="Re: [OMPI users] error while loading shared libraries: libmpi_cxx.so.0" -->
<!-- id="990413.96641.qm_at_web34802.mail.mud.yahoo.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4B445D75-4CC0-412E-AB1A-4E280512947E_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] error while loading shared libraries: libmpi_cxx.so.0<br>
<strong>From:</strong> Shafagh Jafer (<em>barfy27_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-09-19 17:51:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6629.php">Gabriele Fatigati: "[OMPI users] MPI Finalize"</a>
<li><strong>Previous message:</strong> <a href="6627.php">Jeff Squyres: "Re: [OMPI users] error while loading shared libraries: libmpi_cxx.so.0"</a>
<li><strong>In reply to:</strong> <a href="6627.php">Jeff Squyres: "Re: [OMPI users] error while loading shared libraries: libmpi_cxx.so.0"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6622.php">Davi Vercillo C. Garcia (&#227;&#131;&#135;&#227;&#131;&#147;&#227;&#131;&#131;&#227;&#131;&#137;): "Re: [OMPI users] Newbie doubt."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
yes they are installed on all machines by a technician. I can see the openmpi '/lib/' directory on all machines.
<br>
<p>--- On Fri, 9/19/08, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p>From: Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
<br>
Subject: Re: [OMPI users] error while loading shared libraries: libmpi_cxx.so.0
<br>
To: &quot;Open MPI Users&quot; &lt;users_at_[hidden]&gt;
<br>
Date: Friday, September 19, 2008, 2:47 PM
<br>
<p>You do need to have Open MPI installed on all machines, and have the  
<br>
Open MPI libraries be able to be found on all machines.  See these FAQ  
<br>
entries:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/faq/?category=running#run-prereqs">http://www.open-mpi.org/faq/?category=running#run-prereqs</a>
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/faq/?category=running#adding-ompi-to-path">http://www.open-mpi.org/faq/?category=running#adding-ompi-to-path</a>
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/faq/?category=running#mpirun-prefix">http://www.open-mpi.org/faq/?category=running#mpirun-prefix</a>
<br>
<p><p>On Sep 19, 2008, at 5:30 PM, Shafagh Jafer wrote:
<br>
<p><span class="quotelev1">&gt; I did the modifications you mentioned and I got it working. Now when  
</span><br>
<span class="quotelev1">&gt; I use the mpirun to run an example on one or multiple machines I get  
</span><br>
<span class="quotelev1">&gt; the following error:
</span><br>
<span class="quotelev1">&gt; =====================================================
</span><br>
<span class="quotelev1">&gt; &quot;error while loading shared libraries: libmpi_cxx.so.0: cannot open  
</span><br>
<span class="quotelev1">&gt; shared object file: No such file or directory
</span><br>
<span class="quotelev1">&gt; =======================================================
</span><br>
<span class="quotelev1">&gt; It seems that it can not find libmpi files. I am attaching my  
</span><br>
<span class="quotelev1">&gt; makefile.common.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --- On Thu, 9/18/08, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; From: Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] what is inside mpicc/mpic++
</span><br>
<span class="quotelev1">&gt; To: &quot;Open MPI Users&quot; &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Date: Thursday, September 18, 2008, 5:30 AM
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I believe that the problem is your &quot;-DMPI&quot; in your Makefile. 
</span><br>
The line
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; in question in mpicxx.h is:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; namespace MPI {
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When you use -DMPI, the preprocessor replaces this with:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; namespace 1 {
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; which is not legal.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In short, the application using the name &quot;MPI&quot; is illegal.  That
</span><br>
name
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; is reserved for the MPI C++ namespace.  If you change the name to
</span><br>
<span class="quotelev1">&gt; something else (like -DUSE_MPI, and change the source code to match),
</span><br>
<span class="quotelev1">&gt; this particular problem should be solved.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; But then again, I'm not sure why you changed CPP to g++ and CC to gcc;
</span><br>
<span class="quotelev1">&gt; shouldn't they be mpicc?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It's also not clear from the context of Makefile.common whether CPP is
</span><br>
<span class="quotelev1">&gt; supposed to be the C preprocessor or the C++ compiler.  If it's
</span><br>
<span class="quotelev1">&gt; supposed to be the C preprocessor, then &quot;mpicc -E&quot; would be
</span><br>
fine; if
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; it's supposed to be the C++ compiler, then mpic++ (or mpiCC) would be
</span><br>
<span class="quotelev1">&gt; fine.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sep 18, 2008, at 1:46 AM, Shafagh Jafer wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks a lot. The problem i have is that i have installed
</span><br>
<span class="quotelev2">&gt; &gt; openmpi-1.2.7 and every thing went well and i tested hello_c and
</span><br>
<span class="quotelev2">&gt; &gt; ring_c. But the problem now is that when i use open mpi's mpicc
</span><br>
and
<br>
<span class="quotelev2">&gt; &gt; mpic++ in my Makefile i get errors reported from inside openmpi's
</span><br>
<span class="quotelev2">&gt; &gt; source code. I am attaching my Makefile and here I paste a snapshot
</span><br>
<span class="quotelev2">&gt; &gt; of the errors I get:
</span><br>
<span class="quotelev2">&gt; &gt; =========================================================
</span><br>
<span class="quotelev2">&gt; &gt; In file included from /opt/openmpi/1.2.7/include/mpi.h:1795,
</span><br>
<span class="quotelev2">&gt; &gt;                  from stdaload.cpp:33:
</span><br>
<span class="quotelev2">&gt; &gt; /opt/openmpi/1.2.7/include/openmpi/ompi/mpi/cxx/mpicxx.h:136: parse
</span><br>
<span class="quotelev2">&gt; &gt; error before `1'
</span><br>
<span class="quotelev2">&gt; &gt; In file included from /opt/openmpi/1.2.7/include/openmpi/ompi/mpi/
</span><br>
<span class="quotelev2">&gt; &gt; cxx/mpicxx.h:168,
</span><br>
<span class="quotelev2">&gt; &gt;                  from /opt/openmpi/1.2.7/include/mpi.h:1795,
</span><br>
<span class="quotelev2">&gt; &gt;                  from stdaload.cpp:33:
</span><br>
<span class="quotelev2">&gt; &gt; /opt/openmpi/1.2.7/include/openmpi/ompi/mpi/cxx/functions.h:143:
</span><br>
<span class="quotelev2">&gt; &gt; parse error before `1'
</span><br>
<span class="quotelev2">&gt; &gt; In file included from /opt/openmpi/1.2.7/include/openmpi/ompi/mpi/
</span><br>
<span class="quotelev2">&gt; &gt; cxx/mpicxx.h:195,
</span><br>
<span class="quotelev2">&gt; &gt;                  from /opt/openmpi/1.2.7/include/mpi.h:1795,
</span><br>
<span class="quotelev2">&gt; &gt;                  from stdaload.cpp:33:
</span><br>
<span class="quotelev2">&gt; &gt; /opt/openmpi/1.2.7/include/openmpi/ompi/mpi/cxx/status.h:26: parse
</span><br>
<span class="quotelev2">&gt; &gt; error before `::'
</span><br>
<span class="quotelev2">&gt; &gt; /opt/openmpi/1.2.7/include/openmpi/ompi/mpi/cxx/status.h:27: parse
</span><br>
<span class="quotelev2">&gt; &gt; error before `::'
</span><br>
<span class="quotelev2">&gt; &gt; /opt/openmpi/1.2.7/include/openmpi/ompi/mpi/cxx/status.h:28: parse
</span><br>
<span class="quotelev2">&gt; &gt; error before `::'
</span><br>
<span class="quotelev2">&gt; &gt; /opt/openmpi/1.2.7/include/openmpi/ompi/mpi/cxx/status.h:102: parse
</span><br>
<span class="quotelev2">&gt; &gt; error before `1'
</span><br>
<span class="quotelev2">&gt; &gt; In file included from /opt/openmpi/1.2.7/include/openmpi/ompi/mpi/
</span><br>
<span class="quotelev2">&gt; &gt; cxx/mpicxx.h:196,
</span><br>
<span class="quotelev2">&gt; &gt;                  from /opt/openmpi/1.2.7/include/mpi.h:1795,
</span><br>
<span class="quotelev2">&gt; &gt;                  from stdaload.cpp:33:
</span><br>
<span class="quotelev2">&gt; &gt; /opt/openmpi/1.2.7/include/openmpi/ompi/mpi/cxx/request.h:200: parse
</span><br>
<span class="quotelev2">&gt; &gt; error before `1'
</span><br>
<span class="quotelev2">&gt; &gt; /opt/openmpi/1.2.7/include/openmpi/ompi/mpi/cxx/request.h:206: parse
</span><br>
<span class="quotelev2">&gt; &gt; error before `('
</span><br>
<span class="quotelev2">&gt; &gt; ...
</span><br>
<span class="quotelev2">&gt; &gt; =========================================================
</span><br>
<span class="quotelev2">&gt; &gt; Please help me. I am being turtured by this errors and can't
</span><br>
resolve
<br>
<span class="quotelev2">&gt; &gt; them :-(
</span><br>
<span class="quotelev2">&gt; &gt; --- On Wed, 9/17/08, Terry Frankcombe &lt;terry_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; From: Terry Frankcombe &lt;terry_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Subject: Re: [OMPI users] what is inside mpicc/mpic++
</span><br>
<span class="quotelev2">&gt; &gt; To: &quot;Open MPI Users&quot; &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Date: Wednesday, September 17, 2008, 10:35 PM
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; In OMPI these are binaries, not scripts.  Not human readable.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; [tjf_at_rscpc28 NH2+]$ ll /usr/local/bin/mpif90
</span><br>
<span class="quotelev2">&gt; &gt; lrwxrwxrwx 1 root root 12 2008-03-05 14:39 /usr/local/bin/mpif90
</span><br>
-&gt;
<br>
<span class="quotelev2">&gt; &gt; opal_wrapper*
</span><br>
<span class="quotelev2">&gt; &gt; [tjf_at_rscpc28 NH2+]$ file /usr/local/bin/opal_wrapper
</span><br>
<span class="quotelev2">&gt; &gt; /usr/local/bin/opal_wrapper: ELF 32-bit LSB executable, Intel 80386,
</span><br>
<span class="quotelev2">&gt; &gt; version 1
</span><br>
<span class="quotelev2">&gt; &gt; (SYSV), for GNU/Linux 2.6.8, dynamically linked (uses shared libs),
</span><br>
<span class="quotelev2">&gt; &gt; not stripped
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Wed, 2008-09-17 at 22:31 -0700, Shafagh Jafer wrote:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;         I am trying to figure out a problem that i am stuck in
</span><br>
:-
<br>
<span class="quotelev2">&gt; &gt; ( could
</span><br>
<span class="quotelev2">&gt; &gt; anyone please tell me how their mpicc/mpic++ looks like? is there
</span><br>
<span class="quotelev2">&gt; &gt; any thing
</span><br>
<span class="quotelev2">&gt; &gt; readable inside these files?because mine look corrupted and are
</span><br>
<span class="quotelev2">&gt; &gt; filled with
</span><br>
<span class="quotelev2">&gt; &gt; unreadable charachters.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;         Please let me know.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt; &gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
&lt;Makefile.common&gt;_______________________________________________
<br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-6628/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6629.php">Gabriele Fatigati: "[OMPI users] MPI Finalize"</a>
<li><strong>Previous message:</strong> <a href="6627.php">Jeff Squyres: "Re: [OMPI users] error while loading shared libraries: libmpi_cxx.so.0"</a>
<li><strong>In reply to:</strong> <a href="6627.php">Jeff Squyres: "Re: [OMPI users] error while loading shared libraries: libmpi_cxx.so.0"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6622.php">Davi Vercillo C. Garcia (&#227;&#131;&#135;&#227;&#131;&#147;&#227;&#131;&#131;&#227;&#131;&#137;): "Re: [OMPI users] Newbie doubt."</a>
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
