<?
$subject_val = "Re: [OMPI users] Configure fails with icc 10.1.008";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec  7 08:17:59 2007" -->
<!-- isoreceived="20071207131759" -->
<!-- sent="Fri, 7 Dec 2007 08:17:53 -0500" -->
<!-- isosent="20071207131753" -->
<!-- name="Chris Slaughter" -->
<!-- email="slaughterc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Configure fails with icc 10.1.008" -->
<!-- id="9a457d410712070517x2d464d81ua5fc1b42d31b6a86_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="3E587065-07EA-4678-AB0F-BDBEE27B15E1_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Configure fails with icc 10.1.008<br>
<strong>From:</strong> Chris Slaughter (<em>slaughterc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-12-07 08:17:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4622.php">Eric Thibodeau: "Re: [OMPI users] Configure fails with icc 10.1.008"</a>
<li><strong>Previous message:</strong> <a href="4620.php">Jeff Squyres: "Re: [OMPI users] Using mtrace with openmpi segfaults"</a>
<li><strong>In reply to:</strong> <a href="4619.php">Jeff Squyres: "Re: [OMPI users] Configure fails with icc 10.1.008"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4622.php">Eric Thibodeau: "Re: [OMPI users] Configure fails with icc 10.1.008"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I've been using Open MPI 1.2.4 with Intel 10.1 for about a month now
<br>
with no problems.
<br>
<p>Can you compile a simple C++ hello world type program?  I would try
<br>
this to verify the compiler installation...
<br>
<p>On Dec 7, 2007 7:58 AM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; This is not an Open MPI problem; Open MPI is simply reporting that
</span><br>
<span class="quotelev1">&gt; your C++ compiler is not working.  OMPI tests a trivial C++ program
</span><br>
<span class="quotelev1">&gt; that uses the STL to ensure that your C++ program is working.  It's
</span><br>
<span class="quotelev1">&gt; essentially:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;string&gt;
</span><br>
<span class="quotelev1">&gt; int
</span><br>
<span class="quotelev1">&gt; main ()
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt; std::string foo = &quot;Hello, world&quot;
</span><br>
<span class="quotelev1">&gt;    ;
</span><br>
<span class="quotelev1">&gt;    return 0;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You should probably check with Intel support for more details.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Dec 6, 2007, at 11:25 PM, Eric Thibodeau wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hello all,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;   I am unable to get past ./configure as ICC fails on C++ tests (see
</span><br>
<span class="quotelev2">&gt; &gt; attached ompi-output.tar.gz). Configure was called without and the
</span><br>
<span class="quotelev2">&gt; &gt; with sourcing `/opt/intel/cc/10.1.xxx/bin/iccvars.sh`  as per one of
</span><br>
<span class="quotelev2">&gt; &gt; the invocation options in icc's doc. I was unable to find the
</span><br>
<span class="quotelev2">&gt; &gt; relevant (well..intelligible for me that is ;P ) cause of the
</span><br>
<span class="quotelev2">&gt; &gt; failure in config.log. Any help would be appreciated.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Eric Thibodeau
</span><br>
<span class="quotelev2">&gt; &gt; &lt;ompi-output.tar.gz&gt;_______________________________________________
</span><br>
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4622.php">Eric Thibodeau: "Re: [OMPI users] Configure fails with icc 10.1.008"</a>
<li><strong>Previous message:</strong> <a href="4620.php">Jeff Squyres: "Re: [OMPI users] Using mtrace with openmpi segfaults"</a>
<li><strong>In reply to:</strong> <a href="4619.php">Jeff Squyres: "Re: [OMPI users] Configure fails with icc 10.1.008"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4622.php">Eric Thibodeau: "Re: [OMPI users] Configure fails with icc 10.1.008"</a>
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
