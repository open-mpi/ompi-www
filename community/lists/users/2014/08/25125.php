<?
$subject_val = "Re: [OMPI users] [EXTERNAL] Re: building openmpi 1.8.1 with intel 14.0.1";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug 21 16:44:31 2014" -->
<!-- isoreceived="20140821204431" -->
<!-- sent="Thu, 21 Aug 2014 20:44:15 +0000" -->
<!-- isosent="20140821204415" -->
<!-- name="Bosler, Peter Andrew" -->
<!-- email="pabosle_at_[hidden]" -->
<!-- subject="Re: [OMPI users] [EXTERNAL] Re: building openmpi 1.8.1 with intel 14.0.1" -->
<!-- id="D01BB532.2CA%pabosle_at_sandia.gov" -->
<!-- charset="Windows-1252" -->
<!-- inreplyto="45F1370B-B531-440D-88DE-4014DEC7B497_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] [EXTERNAL] Re: building openmpi 1.8.1 with intel 14.0.1<br>
<strong>From:</strong> Bosler, Peter Andrew (<em>pabosle_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-21 16:44:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25126.php">Filippo Spiga: "Re: [OMPI users] Clarification about OpenMPI, slurm and PMI interface"</a>
<li><strong>Previous message:</strong> <a href="25124.php">Ralph Castain: "Re: [OMPI users] building openmpi 1.8.1 with intel 14.0.1"</a>
<li><strong>In reply to:</strong> <a href="25124.php">Ralph Castain: "Re: [OMPI users] building openmpi 1.8.1 with intel 14.0.1"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Update: I got both OpenMPI 1.8.1 and 1.8.2rc4 to configure and build on my
<br>
Mac laptop running OS X 10.9.4.
<br>
<p>Neither works on the 2-day old Mac Pro, but in investigating this I found
<br>
other problems not related to OpenMPI &#139; probably hardware or OS related.
<br>
Time to exercise the warranty.
<br>
<p>@Ralph : Thanks for the suggestion
<br>
@Gus : You are correct, Xcode continues to be a prerequisite for any
<br>
development on Mac.
<br>
<p>Pete
<br>
<p><p>On 8/21/14, 2:04 PM, &quot;Ralph Castain&quot; &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;FWIW: I just tried on my Mac with the Intel 14.0 compilers, and it
</span><br>
<span class="quotelev1">&gt;configured and built just fine. However, that was with the current state
</span><br>
<span class="quotelev1">&gt;of the 1.8 branch (the upcoming 1.8.2 release), so you might want to try
</span><br>
<span class="quotelev1">&gt;that in case there is a difference.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;On Aug 21, 2014, at 12:59 PM, Gus Correa &lt;gus_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi Peter
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; If I remember right from my compilation of OMPI on a Mac
</span><br>
<span class="quotelev2">&gt;&gt; years ago, you need to have X-Code installed, in case you don't.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; If vampir-trace is the only problem,
</span><br>
<span class="quotelev2">&gt;&gt; you can disable it when you configure OMPI (--disable-vt).
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; My two cents,
</span><br>
<span class="quotelev2">&gt;&gt; Gus Correa
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On 08/21/2014 03:35 PM, Bosler, Peter Andrew wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Good afternoon,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I&#185;m having trouble configuring OpenMPI for use with the Intel
</span><br>
<span class="quotelev3">&gt;&gt;&gt;compilers.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  I run the command &#179;./configure &#139;prefix=/opt/openmpi/intel CC=icc
</span><br>
<span class="quotelev3">&gt;&gt;&gt; CXX=icpc FC=ifort 2&gt;&amp;1 | tee ~/openmpi-config.out&#178; and I notice three
</span><br>
<span class="quotelev3">&gt;&gt;&gt; problems:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1. I get two instances of &#179;Report this to
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    <a href="http://www.open-mpi.org/community/help">http://www.open-mpi.org/community/help</a>&#178; with regard to netinet/in.h
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    and netinit/tcp.h in the output (attached)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2. I receive a note about Vampire Trace being broken and finally a
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    failed configure warning
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 3. Configure ultimately fails because it failed to build GNU libltdl.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I&#185;m running Mac OS X 10.9.4 on a 3.5 Ghz 6-core Intel Xeon E5 with
</span><br>
<span class="quotelev3">&gt;&gt;&gt;Intel
</span><br>
<span class="quotelev3">&gt;&gt;&gt; compilers version 14.0.1.  The OpenMPI version I&#185;m trying to build is
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1.8.1.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; My environment is set with LD_LIBRARY_PATH=/opt/intel/lib/intel64
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; As an aside, if there are any configuration options for OpenMPI that
</span><br>
<span class="quotelev3">&gt;&gt;&gt; will take special advantage of the Xeon processor, I would love to know
</span><br>
<span class="quotelev3">&gt;&gt;&gt; more about them.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thank you very much for your time.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Pete Bosler
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;<a href="http://www.open-mpi.org/community/lists/users/2014/08/25122.php">http://www.open-mpi.org/community/lists/users/2014/08/25122.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
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
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt;<a href="http://www.open-mpi.org/community/lists/users/2014/08/25123.php">http://www.open-mpi.org/community/lists/users/2014/08/25123.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt;users mailing list
</span><br>
<span class="quotelev1">&gt;users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;Link to this post:
</span><br>
<span class="quotelev1">&gt;<a href="http://www.open-mpi.org/community/lists/users/2014/08/25124.php">http://www.open-mpi.org/community/lists/users/2014/08/25124.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25126.php">Filippo Spiga: "Re: [OMPI users] Clarification about OpenMPI, slurm and PMI interface"</a>
<li><strong>Previous message:</strong> <a href="25124.php">Ralph Castain: "Re: [OMPI users] building openmpi 1.8.1 with intel 14.0.1"</a>
<li><strong>In reply to:</strong> <a href="25124.php">Ralph Castain: "Re: [OMPI users] building openmpi 1.8.1 with intel 14.0.1"</a>
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
