<?
$subject_val = "Re: [MTT devel] Best way to run ftb_database_server and ftb_agent";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov  9 09:47:03 2010" -->
<!-- isoreceived="20101109144703" -->
<!-- sent="Tue, 9 Nov 2010 09:46:58 -0500" -->
<!-- isosent="20101109144658" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [MTT devel] Best way to run ftb_database_server and ftb_agent" -->
<!-- id="B7D5BCD6-8C21-4EF6-8655-006D1D6F7AE0_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4CD8E381.6010307_at_osl.iu.edu" -->
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
<strong>Subject:</strong> Re: [MTT devel] Best way to run ftb_database_server and ftb_agent<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-11-09 09:46:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0536.php">DongInn Kim: "[MTT devel] Question about adding executable tests to the &quot;Test Run&quot; phase"</a>
<li><strong>Previous message:</strong> <a href="0534.php">DongInn Kim: "Re: [MTT devel] Best way to run ftb_database_server and ftb_agent"</a>
<li><strong>In reply to:</strong> <a href="0534.php">DongInn Kim: "Re: [MTT devel] Best way to run ftb_database_server and ftb_agent"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0525.php">Abhishek Kulkarni: "Re: [MTT devel] Best way to run ftb_database_server and ftb_agent"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Nov 9, 2010, at 1:00 AM, DongInn Kim wrote:
<br>
<p><span class="quotelev1">&gt; No, I did not know that it should be added in the MPI Get phase.
</span><br>
<p>You have to call all the phases, even if they don't &quot;do&quot; anything.  That's why we have no-op / alreadyinstalled versions of plugins, for example.  Each phase sets up data structures that are used by subsequent phases.
<br>
<p><span class="quotelev1">&gt; OK, I tried to add it the MPI Get phase and mpi_details are recognized but I could not have &quot;Test Run&quot; phase run the scripts in before_any_exec and after_all_exec.
</span><br>
<p>What exactly do you have in your ini file again for these fields?
<br>
<p>I have this in an old ini file -- it *used* to work (when launching MPICH2 and Intel MPI jobs through MTT):
<br>
<p>before_any_exec = &lt;&lt;EOF
<br>
h=`hostname`
<br>
file=mtt-hostlist.$$
<br>
rm -f $file
<br>
# If we're allocating by node, get each hostname once.  Otherwise, get
<br>
# each hostname as many times as we have slots on that node.
<br>
srun hostname | uniq &gt; $file
<br>
# Add localhost if it's not in there (e.g., srun -A)
<br>
local=`grep $h $file`
<br>
touch /tmp/mtt-mpiexec-options.$SLURM_JOBID
<br>
if test &quot;$local&quot; = &quot;&quot;; then
<br>
&nbsp;&nbsp;&nbsp;echo $h &gt;&gt; $file
<br>
&nbsp;&nbsp;&nbsp;echo -nolocal &gt; /tmp/mpiexec-options.$SLURM_JOBID
<br>
fi
<br>
num=`wc -l $file | awk '{ print $1 }'`
<br>
mpdboot -n $num -r ssh --verbose --file=$file
<br>
mpdtrace
<br>
rm -f $file
<br>
EOF
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0536.php">DongInn Kim: "[MTT devel] Question about adding executable tests to the &quot;Test Run&quot; phase"</a>
<li><strong>Previous message:</strong> <a href="0534.php">DongInn Kim: "Re: [MTT devel] Best way to run ftb_database_server and ftb_agent"</a>
<li><strong>In reply to:</strong> <a href="0534.php">DongInn Kim: "Re: [MTT devel] Best way to run ftb_database_server and ftb_agent"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0525.php">Abhishek Kulkarni: "Re: [MTT devel] Best way to run ftb_database_server and ftb_agent"</a>
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
