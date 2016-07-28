<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Jul 23 17:31:06 2007" -->
<!-- isoreceived="20070723213106" -->
<!-- sent="Mon, 23 Jul 2007 17:30:59 -0400" -->
<!-- isosent="20070723213059" -->
<!-- name="Bill McMillan" -->
<!-- email="bmcmillan_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Fwd: lsf support / farm use models" -->
<!-- id="FC9F574257AC4C46A53166FB4A9CFCCD0298BB0E_at_catoexm05.noam.corp.platform.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="[OMPI devel] Fwd: lsf support / farm use models" -->
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
<strong>From:</strong> Bill McMillan (<em>bmcmillan_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-07-23 17:30:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1976.php">Lisandro Dalcin: "[OMPI devel] MPI_APPNUM value for apps not started through mpiexec"</a>
<li><strong>Previous message:</strong> <a href="1974.php">Pavel Shamis (Pasha): "Re: [OMPI devel] problems with openib finalize"</a>
<li><strong>Maybe in reply to:</strong> <a href="1900.php">Matthew Moskewicz: "[OMPI devel] Fwd: lsf support / farm use models"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Matt,
<br>
<p>Sorry for the delay in replying.
<br>
<p><span class="quotelev1">&gt;first of all, thanks for the info bill! i think i'm really starting to
</span><br>
piece things together now. you are right in
<br>
<span class="quotelev1">&gt;that i'm working with a 6.x (6.2 with 6.1 devel libs ;) install here at
</span><br>
cadence, without the HPC extensions AFAIK. 
<br>
<span class="quotelev1">&gt;also, i think that are customers are mostly in the same position -- i
</span><br>
assume that the HPC extensions cost extra? 
<br>
<span class="quotelev1">&gt;or perhaps admins just don't bother to install them.
</span><br>
<p>&nbsp;Since most apps in EDA are sequential, most admins haven't installed
<br>
the extensions
<br>
<p><span class="quotelev1">&gt;i'll try to gather more data, but my feeling it that the market
</span><br>
penetration of both HPC and LSF 7.0 is low in our 
<br>
<span class="quotelev1">&gt;marker (EDA vendors and customers). i'd love to just stall until 7.0 is
</span><br>
widely available, but perhaps in the mean 
<br>
<span class="quotelev1">&gt;time it would be nice to have some backward support for LSF 6.0 'base'.
</span><br>
it seems like supporting LSF 6.x /w HPC 
<br>
<span class="quotelev1">&gt;might not be too useful, since:
</span><br>
<span class="quotelev1">&gt;a) it's not clear that the 'built in' &quot;bsub -n N -a openmpi foo&quot;
</span><br>
<span class="quotelev1">&gt;support will work with an MPI-2 dynamic-spawning application like mine
</span><br>
(or does it?),
<br>
<p>&nbsp;From an LSF perspective, you get allocated N slots, and how the
<br>
application uses them is pretty much at its
<br>
&nbsp;discretion.   So in this case it would start orted on each allocated
<br>
node, and you can create whatever
<br>
&nbsp;dynamic processes you like from your openmpi app within that
<br>
allocation.
<br>
<p>&nbsp;At present the actual allocation is fixed, but there will be support
<br>
for changing the actual allocation
<br>
&nbsp;in a forthcoming release.
<br>
<p><span class="quotelev1">&gt;b) i've heard that manually interfacing with the  parallel application
</span><br>
manager directly is tricky?
<br>
<p>&nbsp;If you don't use the supplied methods (such as the -a openmpi method)
<br>
then it can be a little tricky to
<br>
&nbsp;set it up the first time.
<br>
<p><span class="quotelev1">&gt;c) most importantly, it's not clear than any of our customers have the
</span><br>
HPC support, and certainly not all of them, 
<br>
<span class="quotelev1">&gt;so i need to support LSF 6.0 'base' anyway -- it only needs to work
</span><br>
until 7.0 is widely available (&lt; 1 year? i really
<br>
<span class="quotelev1">&gt;have no idea ... will Platform end support for 6.x at some particular
</span><br>
time? or otherwise push customers to upgrade? perhaps 
<br>
<span class="quotelev1">&gt;cadence can help there too ...) .
</span><br>
<p>&nbsp;The -a openmpi method works with LSF 6.x; and will be supported till at
<br>
least the end of the decade.  It sounds like
<br>
&nbsp;the simplest solution may be to make the hpc extensions available as a
<br>
patch kit for everyone.
<br>
<p><span class="quotelev1">&gt;1) use bsub -n N, followed by N-1 ls_rtaske() calls (or similar).
</span><br>
<span class="quotelev1">&gt;while ls_rtaske() may not 'force' me to follow the queuing rules, if i
</span><br>
only launch on the proper machines, i should be okay, 
<br>
<span class="quotelev1">&gt;right? i don't think IO and process marshaling (i'm not sure exactly
</span><br>
what you mean by
<br>
<span class="quotelev1">&gt;that) are a problem since openmpi/orted handles those issues, i think?
</span><br>
<p>&nbsp;Yes it will work, however it has two drawbacks:
<br>
&nbsp;* In this model you essentially become responsible for error handling
<br>
if a remote task dies, and cleaning up gracefully if
<br>
&nbsp;&nbsp;&nbsp;the master process dies
<br>
&nbsp;* From a process accounting (and hence scheduling) point of view,
<br>
resources consumed by the remote tasks are not attributed
<br>
&nbsp;&nbsp;&nbsp;to the master task.
<br>
&nbsp;The -a openmpi method (and blaunch) handles both these cases.
<br>
<p><span class="quotelev1">&gt;2) use only bsub's of single processes, using some initial wrapper
</span><br>
script that bsub's all the jobs (master + N-1 slaves) 
<br>
<span class="quotelev1">&gt;needed to reach the desired static allocation for openmpi. this seems
</span><br>
to be what my internal guy is suggesting is 'required'. 
<br>
<p>&nbsp;Again, this will work, tho you may not be too popular with your cluster
<br>
admin if you are holding onto N-1 cpus while waiting
<br>
&nbsp;for the Nth to be allocated.  Method (1) would be viewed as a true
<br>
parallel job and could be backfilled, while (2) is just
<br>
&nbsp;a lose collection of sequential tasks.  This would also suffer from the
<br>
same drawbacks as (1).
<br>
<p>&nbsp;If your application could start with just 1 cpu then deal with the rest
<br>
as they are added, then you keep the cluster admin 
<br>
&nbsp;happy.
<br>
<p><p>&nbsp;I guess this discussion is becoming very LSF specific, if you would
<br>
prefer to discuss it offline please let me know.
<br>
<p>&nbsp;Cheers
<br>
&nbsp;Bill
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1976.php">Lisandro Dalcin: "[OMPI devel] MPI_APPNUM value for apps not started through mpiexec"</a>
<li><strong>Previous message:</strong> <a href="1974.php">Pavel Shamis (Pasha): "Re: [OMPI devel] problems with openib finalize"</a>
<li><strong>Maybe in reply to:</strong> <a href="1900.php">Matthew Moskewicz: "[OMPI devel] Fwd: lsf support / farm use models"</a>
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
