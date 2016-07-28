<?
$subject_val = "Re: [OMPI users] building openmpi 1.8.1 with intel 14.0.1";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug 21 16:04:58 2014" -->
<!-- isoreceived="20140821200458" -->
<!-- sent="Thu, 21 Aug 2014 13:04:38 -0700" -->
<!-- isosent="20140821200438" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] building openmpi 1.8.1 with intel 14.0.1" -->
<!-- id="45F1370B-B531-440D-88DE-4014DEC7B497_at_open-mpi.org" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="53F64FA7.5020508_at_ldeo.columbia.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] building openmpi 1.8.1 with intel 14.0.1<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-21 16:04:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25125.php">Bosler, Peter Andrew: "Re: [OMPI users] [EXTERNAL] Re: building openmpi 1.8.1 with intel 14.0.1"</a>
<li><strong>Previous message:</strong> <a href="25123.php">Gus Correa: "Re: [OMPI users] building openmpi 1.8.1 with intel 14.0.1"</a>
<li><strong>In reply to:</strong> <a href="25123.php">Gus Correa: "Re: [OMPI users] building openmpi 1.8.1 with intel 14.0.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25125.php">Bosler, Peter Andrew: "Re: [OMPI users] [EXTERNAL] Re: building openmpi 1.8.1 with intel 14.0.1"</a>
<li><strong>Reply:</strong> <a href="25125.php">Bosler, Peter Andrew: "Re: [OMPI users] [EXTERNAL] Re: building openmpi 1.8.1 with intel 14.0.1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
FWIW: I just tried on my Mac with the Intel 14.0 compilers, and it configured and built just fine. However, that was with the current state of the 1.8 branch (the upcoming 1.8.2 release), so you might want to try that in case there is a difference.
<br>
<p><p><p>On Aug 21, 2014, at 12:59 PM, Gus Correa &lt;gus_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi Peter
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If I remember right from my compilation of OMPI on a Mac
</span><br>
<span class="quotelev1">&gt; years ago, you need to have X-Code installed, in case you don't.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If vampir-trace is the only problem,
</span><br>
<span class="quotelev1">&gt; you can disable it when you configure OMPI (--disable-vt).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; My two cents,
</span><br>
<span class="quotelev1">&gt; Gus Correa
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 08/21/2014 03:35 PM, Bosler, Peter Andrew wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Good afternoon,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I&#146;m having trouble configuring OpenMPI for use with the Intel compilers.
</span><br>
<span class="quotelev2">&gt;&gt;  I run the command &#147;./configure &#151;prefix=/opt/openmpi/intel CC=icc
</span><br>
<span class="quotelev2">&gt;&gt; CXX=icpc FC=ifort 2&gt;&amp;1 | tee ~/openmpi-config.out&#148; and I notice three
</span><br>
<span class="quotelev2">&gt;&gt; problems:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 1. I get two instances of &#147;Report this to
</span><br>
<span class="quotelev2">&gt;&gt;    <a href="http://www.open-mpi.org/community/help%94">http://www.open-mpi.org/community/help%94</a> with regard to netinet/in.h
</span><br>
<span class="quotelev2">&gt;&gt;    and netinit/tcp.h in the output (attached)
</span><br>
<span class="quotelev2">&gt;&gt; 2. I receive a note about Vampire Trace being broken and finally a
</span><br>
<span class="quotelev2">&gt;&gt;    failed configure warning
</span><br>
<span class="quotelev2">&gt;&gt; 3. Configure ultimately fails because it failed to build GNU libltdl.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I&#146;m running Mac OS X 10.9.4 on a 3.5 Ghz 6-core Intel Xeon E5 with Intel
</span><br>
<span class="quotelev2">&gt;&gt; compilers version 14.0.1.  The OpenMPI version I&#146;m trying to build is
</span><br>
<span class="quotelev2">&gt;&gt; 1.8.1.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; My environment is set with LD_LIBRARY_PATH=/opt/intel/lib/intel64
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; As an aside, if there are any configuration options for OpenMPI that
</span><br>
<span class="quotelev2">&gt;&gt; will take special advantage of the Xeon processor, I would love to know
</span><br>
<span class="quotelev2">&gt;&gt; more about them.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thank you very much for your time.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Pete Bosler
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/08/25122.php">http://www.open-mpi.org/community/lists/users/2014/08/25122.php</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/08/25123.php">http://www.open-mpi.org/community/lists/users/2014/08/25123.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25125.php">Bosler, Peter Andrew: "Re: [OMPI users] [EXTERNAL] Re: building openmpi 1.8.1 with intel 14.0.1"</a>
<li><strong>Previous message:</strong> <a href="25123.php">Gus Correa: "Re: [OMPI users] building openmpi 1.8.1 with intel 14.0.1"</a>
<li><strong>In reply to:</strong> <a href="25123.php">Gus Correa: "Re: [OMPI users] building openmpi 1.8.1 with intel 14.0.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25125.php">Bosler, Peter Andrew: "Re: [OMPI users] [EXTERNAL] Re: building openmpi 1.8.1 with intel 14.0.1"</a>
<li><strong>Reply:</strong> <a href="25125.php">Bosler, Peter Andrew: "Re: [OMPI users] [EXTERNAL] Re: building openmpi 1.8.1 with intel 14.0.1"</a>
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
