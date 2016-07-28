<?
$subject_val = "Re: [OMPI users] Configure fails with icc 10.1.008";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec 10 10:12:49 2007" -->
<!-- isoreceived="20071210151249" -->
<!-- sent="Mon, 10 Dec 2007 08:12:19 -0700" -->
<!-- isosent="20071210151219" -->
<!-- name="David Gunter" -->
<!-- email="dog_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Configure fails with icc 10.1.008" -->
<!-- id="C0A527C5-4A8F-46BC-AA1F-90232B18B6FA_at_lanl.gov" -->
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
<strong>From:</strong> David Gunter (<em>dog_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-12-10 10:12:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4625.php">Jeff Squyres: "Re: [OMPI users] Open MPI 1.2.4 verbosity w.r.t. osc pt2pt"</a>
<li><strong>Previous message:</strong> <a href="4623.php">de Almeida, Valmor F.: "Re: [OMPI users] Configure fails with icc 10.1.008"</a>
<li><strong>In reply to:</strong> <a href="4617.php">Eric Thibodeau: "[OMPI users] Configure fails with icc 10.1.008"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
A quick reading of this thread makes it sound to me as if you are  
<br>
using icc to compile c++ code.  The correct compiler to use is icpc.   
<br>
This has been the case since at least the version 9 release of the  
<br>
Intel compilers.  icc will not compile c++ code.
<br>
<p>Hope this is useful.
<br>
<p>-david
<br>
<pre>
--
David Gunter
HPC-3: Parallel Tools Team
Los Alamos National Laboratory
On Dec 6, 2007, at 9:25 PM, Eric Thibodeau wrote:
&gt; Hello all,
&gt;
&gt;   I am unable to get past ./configure as ICC fails on C++ tests (see  
&gt; attached ompi-output.tar.gz). Configure was called without and the  
&gt; with sourcing `/opt/intel/cc/10.1.xxx/bin/iccvars.sh`  as per one of  
&gt; the invocation options in icc's doc. I was unable to find the  
&gt; relevant (well..intelligible for me that is ;P ) cause of the  
&gt; failure in config.log. Any help would be appreciated.
&gt;
&gt; Thanks,
&gt;
&gt; Eric Thibodeau
&gt; &lt;ompi-output.tar.gz&gt;_______________________________________________
&gt; users mailing list
&gt; users_at_[hidden]
&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4625.php">Jeff Squyres: "Re: [OMPI users] Open MPI 1.2.4 verbosity w.r.t. osc pt2pt"</a>
<li><strong>Previous message:</strong> <a href="4623.php">de Almeida, Valmor F.: "Re: [OMPI users] Configure fails with icc 10.1.008"</a>
<li><strong>In reply to:</strong> <a href="4617.php">Eric Thibodeau: "[OMPI users] Configure fails with icc 10.1.008"</a>
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
