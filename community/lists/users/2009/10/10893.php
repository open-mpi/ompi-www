<?
$subject_val = "Re: [OMPI users] Re : Yet another stdin problem";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct  7 12:12:26 2009" -->
<!-- isoreceived="20091007161226" -->
<!-- sent="Wed, 07 Oct 2009 17:12:33 +0100" -->
<!-- isosent="20091007161233" -->
<!-- name="Ashley Pittman" -->
<!-- email="ashley_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Re : Yet another stdin problem" -->
<!-- id="1254931953.3133.64.camel_at_alpha" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="6eda6fa0910070842p2103998an9fe391f99da191a2_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Re : Yet another stdin problem<br>
<strong>From:</strong> Ashley Pittman (<em>ashley_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-10-07 12:12:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10894.php">Ralph Castain: "Re: [OMPI users] Re : Yet another stdin problem"</a>
<li><strong>Previous message:</strong> <a href="10892.php">Roman Cheplyaka: "Re: [OMPI users] Re : Yet another stdin problem"</a>
<li><strong>In reply to:</strong> <a href="10892.php">Roman Cheplyaka: "Re: [OMPI users] Re : Yet another stdin problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10894.php">Ralph Castain: "Re: [OMPI users] Re : Yet another stdin problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Or better still if you want to be able to pass the filename and args on
<br>
the mpirun command line use the following and then run it as 
<br>
<p>mpirun -np 64 ./input_wrapper inputs.txt my_exe
<br>
<p>#!/bin/bash
<br>
<p>FILE=$1
<br>
shift
<br>
<p>&quot;$@&quot; &lt; $FILE
<br>
<p>In general though using stdin on parallel applications is rarely a good
<br>
solution.
<br>
<p>Ashley.
<br>
<p>On Wed, 2009-10-07 at 18:42 +0300, Roman Cheplyaka wrote:
<br>
<span class="quotelev1">&gt; As a slight modification, you can write a wrapper script
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #!/bin/sh
</span><br>
<span class="quotelev1">&gt; my_exe &lt; inputs.txt
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; and pass it to mpirun.
</span><br>
<p><pre>
-- 
Ashley Pittman, Bath, UK.
Padb - A parallel job inspection tool for cluster computing
<a href="http://padb.pittman.org.uk">http://padb.pittman.org.uk</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10894.php">Ralph Castain: "Re: [OMPI users] Re : Yet another stdin problem"</a>
<li><strong>Previous message:</strong> <a href="10892.php">Roman Cheplyaka: "Re: [OMPI users] Re : Yet another stdin problem"</a>
<li><strong>In reply to:</strong> <a href="10892.php">Roman Cheplyaka: "Re: [OMPI users] Re : Yet another stdin problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10894.php">Ralph Castain: "Re: [OMPI users] Re : Yet another stdin problem"</a>
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
