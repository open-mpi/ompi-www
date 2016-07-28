<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Jul 18 15:24:07 2007" -->
<!-- isoreceived="20070718192407" -->
<!-- sent="Wed, 18 Jul 2007 12:23:54 -0700" -->
<!-- isosent="20070718192354" -->
<!-- name="Matthew Moskewicz" -->
<!-- email="moskewcz_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Fwd: lsf support / farm use models" -->
<!-- id="325001540707181223y3d569fc5n2bc924f5a3765c4_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="FC9F574257AC4C46A53166FB4A9CFCCD0298B838_at_catoexm05.noam.corp.platform.com" -->
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
<strong>From:</strong> Matthew Moskewicz (<em>moskewcz_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-07-18 15:23:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1937.php">Jeff Squyres: "[OMPI devel] pathscale compilers and TLS"</a>
<li><strong>Previous message:</strong> <a href="1935.php">Neil Ludban: "Re: [OMPI devel] devel Digest, Vol 802, Issue 1"</a>
<li><strong>In reply to:</strong> <a href="1920.php">Bill McMillan: "Re: [OMPI devel] Fwd: lsf support / farm use models"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1975.php">Bill McMillan: "Re: [OMPI devel] Fwd: lsf support / farm use models"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
hi,
<br>
<p>first of all, thanks for the info bill! i think i'm really starting to
<br>
piece things together now. you are right in that i'm working with a
<br>
6.x (6.2 with 6.1 devel libs ;) install here at cadence, without the
<br>
HPC extensions AFAIK. also, i think that are customers are mostly in
<br>
the same position -- i assume that the HPC extensions cost extra? or
<br>
perhaps admins just don't bother to install them.
<br>
<p>so, there are at least three cases to consider:
<br>
LSF 7.0 or greater
<br>
LSF 6.x /w HPC
<br>
LSF 6.x 'base'
<br>
<p>i'll try to gather more data, but my feeling it that the market
<br>
penetration of both HPC and LSF 7.0 is low in our marker (EDA vendors
<br>
and customers). i'd love to just stall until 7.0 is widely available,
<br>
but perhaps in the mean time it would be nice to have some backward
<br>
support for LSF 6.0 'base'. it seems like supporting LSF 6.x /w HPC
<br>
might not be too useful, since:
<br>
a) it's not clear that the 'built in' &quot;bsub -n N -a openmpi foo&quot;
<br>
support will work with an MPI-2 dynamic-spawning application like mine
<br>
(or does it?),
<br>
b) i've heard that manually interfacing with the  parallel application
<br>
manager directly is tricky?
<br>
c) most importantly, it's not clear than any of our customers have the
<br>
HPC support, and certainly not all of them, so i need to support LSF
<br>
6.0 'base' anyway -- it only needs to work until 7.0 is widely
<br>
available (&lt; 1 year? i really have no idea ... will Platform end
<br>
support for 6.x at some particular time? or otherwise push customers
<br>
to upgrade? perhaps cadence can help there too ...) .
<br>
<p>under LSF 7.0 it looks like things are okay and that open-mpi will
<br>
support it in a released version 'soon' (&lt; 6 months? ). sooner than
<br>
our customer wil have LSF 7.0 anyway, so that's fine.
<br>
<p>as for LSF 6.0 'base', there are two workarounds that i see, and a
<br>
couple key questions that remain:
<br>
<p>1) use bsub -n N, followed by N-1 ls_rtaske() calls (or similar).
<br>
while ls_rtaske() may not 'force' me to follow the queuing rules, if i
<br>
only launch on the proper machines, i should be okay, right? i don't
<br>
think IO and process marshaling (i'm not sure exactly what you mean by
<br>
that) are a problem since openmpi/orted handles those issues, i think?
<br>
<p>2) use only bsub's of single processes, using some initial wrapper
<br>
script that bsub's all the jobs (master + N-1 slaves) needed to reach
<br>
the desired static allocation for openmpi. this seems to be what my
<br>
internal guy is suggesting is 'required'. integration with openmpi
<br>
might not be too hard, using suitable trickery. for example, the
<br>
wrapper script launches some wrapper processes that are basically
<br>
rexec daemons. the master waits for them to come up in the ras/lsf
<br>
component (tcp notify, perhaps via the launcher machine to avoid
<br>
needing to know the master hostname a priori), and then the pls/lsf
<br>
component uses the thin rexec daemons to launch orted. seems like a
<br>
bit of a silly workaround, but it does seem to both keep the queuing
<br>
system happy as well as not need ls_rtaske() or similar.
<br>
<p>[ Note: (1) will fail if admins disable the ls_rexec() type of
<br>
functionality, but on a LSF 6.0 'base' system, this would seem to
<br>
disable all || job launching -- i.e. the shipped mpijob/pvmjob all use
<br>
lsgrun and such, so they would be disabled -- is there any other way i
<br>
could start the sub-processes within my allocation in that case? can i
<br>
just have bsub start N copies of something (maybe orted?)? that seems
<br>
like it might be hard to integrate with openmpi, though -- in that
<br>
case, i'd probably just only impliment option (2)]
<br>
<p>Matt.
<br>
<p>On 7/17/07, Bill McMillan &lt;bmcmillan_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; there appear to be some overlaps between the ls_* and lsb_* functions,
</span><br>
<span class="quotelev2">&gt; &gt; but they seem basically compatible as far as i can tell. almost all
</span><br>
<span class="quotelev2">&gt; &gt; the functions have a command line version as well, for example:
</span><br>
<span class="quotelev2">&gt; &gt; lsb_submit()/bsub
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   Like openmpi and orte, there are two layers in LSF.  The ls_* API's
</span><br>
<span class="quotelev1">&gt;   talk to what is/was historically called &quot;LSF Base&quot; and the lsb_* API's
</span><br>
<span class="quotelev1">&gt;   talk to what is/was historically called &quot;LSF Batch&quot;.
</span><br>
[SNIP]
<br>
<span class="quotelev1">&gt;   Regards,
</span><br>
<span class="quotelev1">&gt;   Bill
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -------------
</span><br>
<span class="quotelev1">&gt; Bill McMillan
</span><br>
<span class="quotelev1">&gt; Principal Technical Product Manager
</span><br>
<span class="quotelev1">&gt; Platform Computing
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1937.php">Jeff Squyres: "[OMPI devel] pathscale compilers and TLS"</a>
<li><strong>Previous message:</strong> <a href="1935.php">Neil Ludban: "Re: [OMPI devel] devel Digest, Vol 802, Issue 1"</a>
<li><strong>In reply to:</strong> <a href="1920.php">Bill McMillan: "Re: [OMPI devel] Fwd: lsf support / farm use models"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1975.php">Bill McMillan: "Re: [OMPI devel] Fwd: lsf support / farm use models"</a>
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
