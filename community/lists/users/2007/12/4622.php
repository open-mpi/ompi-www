<?
$subject_val = "Re: [OMPI users] Configure fails with icc 10.1.008";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec  7 11:14:39 2007" -->
<!-- isoreceived="20071207161439" -->
<!-- sent="Fri, 07 Dec 2007 11:14:11 -0500" -->
<!-- isosent="20071207161411" -->
<!-- name="Eric Thibodeau" -->
<!-- email="kyron_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Configure fails with icc 10.1.008" -->
<!-- id="47597153.3020406_at_neuralbs.com" -->
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
<strong>From:</strong> Eric Thibodeau (<em>kyron_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-12-07 11:14:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4623.php">de Almeida, Valmor F.: "Re: [OMPI users] Configure fails with icc 10.1.008"</a>
<li><strong>Previous message:</strong> <a href="4621.php">Chris Slaughter: "Re: [OMPI users] Configure fails with icc 10.1.008"</a>
<li><strong>In reply to:</strong> <a href="4619.php">Jeff Squyres: "Re: [OMPI users] Configure fails with icc 10.1.008"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4623.php">de Almeida, Valmor F.: "Re: [OMPI users] Configure fails with icc 10.1.008"</a>
<li><strong>Reply:</strong> <a href="4623.php">de Almeida, Valmor F.: "Re: [OMPI users] Configure fails with icc 10.1.008"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff,
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;Thanks...at 23h30 coffee is far off... I saw the proper section of 
<br>
the config.log showing exactly that (hello world not working). For 
<br>
everyone else's benefit, ICC (up to 10.1.008) is _not_ compatible with 
<br>
GCC 4.2... (guess I'll have to retro back to 4.1 series...)
<br>
<p>Eric
<br>
<p>Jeff Squyres wrote:
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
<span class="quotelev1">&gt;   ;
</span><br>
<span class="quotelev1">&gt;   return 0;
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
<span class="quotelev1">&gt; On Dec 6, 2007, at 11:25 PM, Eric Thibodeau wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hello all,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   I am unable to get past ./configure as ICC fails on C++ tests (see 
</span><br>
<span class="quotelev2">&gt;&gt; attached ompi-output.tar.gz). Configure was called without and the 
</span><br>
<span class="quotelev2">&gt;&gt; with sourcing `/opt/intel/cc/10.1.xxx/bin/iccvars.sh`  as per one of 
</span><br>
<span class="quotelev2">&gt;&gt; the invocation options in icc's doc. I was unable to find the 
</span><br>
<span class="quotelev2">&gt;&gt; relevant (well..intelligible for me that is ;P ) cause of the failure 
</span><br>
<span class="quotelev2">&gt;&gt; in config.log. Any help would be appreciated.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Eric Thibodeau
</span><br>
<span class="quotelev2">&gt;&gt; &lt;ompi-output.tar.gz&gt;_______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4623.php">de Almeida, Valmor F.: "Re: [OMPI users] Configure fails with icc 10.1.008"</a>
<li><strong>Previous message:</strong> <a href="4621.php">Chris Slaughter: "Re: [OMPI users] Configure fails with icc 10.1.008"</a>
<li><strong>In reply to:</strong> <a href="4619.php">Jeff Squyres: "Re: [OMPI users] Configure fails with icc 10.1.008"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4623.php">de Almeida, Valmor F.: "Re: [OMPI users] Configure fails with icc 10.1.008"</a>
<li><strong>Reply:</strong> <a href="4623.php">de Almeida, Valmor F.: "Re: [OMPI users] Configure fails with icc 10.1.008"</a>
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
