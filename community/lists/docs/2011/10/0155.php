<?
$subject_val = "Re: [OMPI docs] Open MPI compilation Error";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Oct 17 10:23:56 2011" -->
<!-- isoreceived="20111017142356" -->
<!-- sent="Mon, 17 Oct 2011 14:23:50 +0000" -->
<!-- isosent="20111017142350" -->
<!-- name="Rashid, Z. (Zahid)" -->
<!-- email="Z.Rashid_at_[hidden]" -->
<!-- subject="Re: [OMPI docs] Open MPI compilation Error" -->
<!-- id="E4836E204F953E4F91484E7A23674AB801C4828C_at_ICTSC-W-S206.soliscom.uu.nl" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="C72CEC64-555B-4BE5-A9F7-8E597AA660A8_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI docs] Open MPI compilation Error<br>
<strong>From:</strong> Rashid, Z. (Zahid) (<em>Z.Rashid_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-10-17 10:23:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0156.php">Richard Pitre: "Re: [OMPI docs] Open MPI compilation Error"</a>
<li><strong>Previous message:</strong> <a href="0154.php">Ralph Castain: "Re: [OMPI docs] Open MPI compilation Error"</a>
<li><strong>In reply to:</strong> <a href="0154.php">Ralph Castain: "Re: [OMPI docs] Open MPI compilation Error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0156.php">Richard Pitre: "Re: [OMPI docs] Open MPI compilation Error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks for the support. Now it is happy.
<br>
<p>________________________________________
<br>
From: docs-bounces_at_[hidden] [docs-bounces_at_[hidden]] on behalf of Ralph Castain [rhc_at_[hidden]]
<br>
Sent: 17 October 2011 15:40
<br>
To: Open MPI documentation team
<br>
Cc: Open MPI Users
<br>
Subject: Re: [OMPI docs] Open MPI compilation Error
<br>
<p>Indeed. However, let me provide this advice. Add --disable-vt to your configure line, and drop all the rest of those flags. You don't need what you gave as we'll automatically figure those out. VampirTrace isn't happy on Mac, so disable it and you should be fine.
<br>
<p><p>On Oct 17, 2011, at 7:29 AM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; I think you want to redirect your question to the users list, not the documentation list.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Oct 17, 2011, at 8:02 AM, Rashid, Z. (Zahid) wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Dear Open MPI users,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I am trying to compile open MPI (release 1.5.4) from the source code on a Macbook Pro (OS X Lion) with Xcode 4.1 installed. I configure the openmpi with the following options;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ../configure CFLAGS=-m64 CXXFLAGS=-m64 FFLAGS=-m64 FCFLAGS=-m64 --with-wrapper-cflags=-m64 --with-wrapper-cxxflags=-m64
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; in a new/clean directory. When I try make it gives me the following error;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    Making all in otfprofile
</span><br>
<span class="quotelev2">&gt;&gt;  CXX    otfprofile-otfprofile.o
</span><br>
<span class="quotelev2">&gt;&gt;  CXX    otfprofile-CSVParse.o
</span><br>
<span class="quotelev2">&gt;&gt;  CXX    otfprofile-DataStructure.o
</span><br>
<span class="quotelev2">&gt;&gt;  CXX    otfprofile-Handler.o
</span><br>
<span class="quotelev2">&gt;&gt;  CXX    otfprofile-Prodtex.o
</span><br>
<span class="quotelev2">&gt;&gt;  CXX    otfprofile-Summary.o
</span><br>
<span class="quotelev2">&gt;&gt;  CXXLD  otfprofile
</span><br>
<span class="quotelev2">&gt;&gt; Undefined symbols for architecture x86_64:
</span><br>
<span class="quotelev2">&gt;&gt;  &quot;___builtin_expect&quot;, referenced from:
</span><br>
<span class="quotelev2">&gt;&gt;      _main.omp_fn.0 in otfprofile-otfprofile.o
</span><br>
<span class="quotelev2">&gt;&gt; ld: symbol(s) not found for architecture x86_64
</span><br>
<span class="quotelev2">&gt;&gt; collect2: ld returned 1 exit status
</span><br>
<span class="quotelev2">&gt;&gt; make[9]: *** [otfprofile] Error 1
</span><br>
<span class="quotelev2">&gt;&gt; make[8]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev2">&gt;&gt; make[7]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev2">&gt;&gt; make[6]: *** [all] Error 2
</span><br>
<span class="quotelev2">&gt;&gt; make[5]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev2">&gt;&gt; make[4]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev2">&gt;&gt; make[3]: *** [all] Error 2
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev2">&gt;&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev2">&gt;&gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I have gcc version 4.2.1 (Based on Apple Inc. build 5658) (LLVM build 2335.15.00), gfortran GNU Fortran (GCC) 4.2.1 (Apple Inc. build 5666) (dot 3) I heard that I can use MacPorts for an easy installation but I want to compile it myself from the source. Can someone suggest me if I need to set some extra flags or what is causing this error? Please let me know if you need any further information.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Regards.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Zahid
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; docs mailing list
</span><br>
<span class="quotelev2">&gt;&gt; docs_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/docs">http://www.open-mpi.org/mailman/listinfo.cgi/docs</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; docs mailing list
</span><br>
<span class="quotelev1">&gt; docs_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/docs">http://www.open-mpi.org/mailman/listinfo.cgi/docs</a>
</span><br>
<p><p>_______________________________________________
<br>
docs mailing list
<br>
docs_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/docs">http://www.open-mpi.org/mailman/listinfo.cgi/docs</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0156.php">Richard Pitre: "Re: [OMPI docs] Open MPI compilation Error"</a>
<li><strong>Previous message:</strong> <a href="0154.php">Ralph Castain: "Re: [OMPI docs] Open MPI compilation Error"</a>
<li><strong>In reply to:</strong> <a href="0154.php">Ralph Castain: "Re: [OMPI docs] Open MPI compilation Error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0156.php">Richard Pitre: "Re: [OMPI docs] Open MPI compilation Error"</a>
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
