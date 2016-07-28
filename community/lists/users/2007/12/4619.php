<?
$subject_val = "Re: [OMPI users] Configure fails with icc 10.1.008";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec  7 07:58:26 2007" -->
<!-- isoreceived="20071207125826" -->
<!-- sent="Fri, 7 Dec 2007 07:58:06 -0500" -->
<!-- isosent="20071207125806" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Configure fails with icc 10.1.008" -->
<!-- id="3E587065-07EA-4678-AB0F-BDBEE27B15E1_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4758CB35.6000100_at_neuralbs.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-12-07 07:58:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4620.php">Jeff Squyres: "Re: [OMPI users] Using mtrace with openmpi segfaults"</a>
<li><strong>Previous message:</strong> <a href="4618.php">alireza ghahremanian: "Re: [OMPI users] MPI_Bcast not broadcast to all processes"</a>
<li><strong>In reply to:</strong> <a href="4617.php">Eric Thibodeau: "[OMPI users] Configure fails with icc 10.1.008"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4621.php">Chris Slaughter: "Re: [OMPI users] Configure fails with icc 10.1.008"</a>
<li><strong>Reply:</strong> <a href="4621.php">Chris Slaughter: "Re: [OMPI users] Configure fails with icc 10.1.008"</a>
<li><strong>Reply:</strong> <a href="4622.php">Eric Thibodeau: "Re: [OMPI users] Configure fails with icc 10.1.008"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This is not an Open MPI problem; Open MPI is simply reporting that  
<br>
your C++ compiler is not working.  OMPI tests a trivial C++ program  
<br>
that uses the STL to ensure that your C++ program is working.  It's  
<br>
essentially:
<br>
<p>#include &lt;string&gt;
<br>
int
<br>
main ()
<br>
{
<br>
std::string foo = &quot;Hello, world&quot;
<br>
&nbsp;&nbsp;&nbsp;;
<br>
&nbsp;&nbsp;&nbsp;return 0;
<br>
}
<br>
<p>You should probably check with Intel support for more details.
<br>
<p><p><p>On Dec 6, 2007, at 11:25 PM, Eric Thibodeau wrote:
<br>
<p><span class="quotelev1">&gt; Hello all,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   I am unable to get past ./configure as ICC fails on C++ tests (see  
</span><br>
<span class="quotelev1">&gt; attached ompi-output.tar.gz). Configure was called without and the  
</span><br>
<span class="quotelev1">&gt; with sourcing `/opt/intel/cc/10.1.xxx/bin/iccvars.sh`  as per one of  
</span><br>
<span class="quotelev1">&gt; the invocation options in icc's doc. I was unable to find the  
</span><br>
<span class="quotelev1">&gt; relevant (well..intelligible for me that is ;P ) cause of the  
</span><br>
<span class="quotelev1">&gt; failure in config.log. Any help would be appreciated.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Eric Thibodeau
</span><br>
<span class="quotelev1">&gt; &lt;ompi-output.tar.gz&gt;_______________________________________________
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
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4620.php">Jeff Squyres: "Re: [OMPI users] Using mtrace with openmpi segfaults"</a>
<li><strong>Previous message:</strong> <a href="4618.php">alireza ghahremanian: "Re: [OMPI users] MPI_Bcast not broadcast to all processes"</a>
<li><strong>In reply to:</strong> <a href="4617.php">Eric Thibodeau: "[OMPI users] Configure fails with icc 10.1.008"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4621.php">Chris Slaughter: "Re: [OMPI users] Configure fails with icc 10.1.008"</a>
<li><strong>Reply:</strong> <a href="4621.php">Chris Slaughter: "Re: [OMPI users] Configure fails with icc 10.1.008"</a>
<li><strong>Reply:</strong> <a href="4622.php">Eric Thibodeau: "Re: [OMPI users] Configure fails with icc 10.1.008"</a>
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
