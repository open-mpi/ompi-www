<?
$subject_val = "Re: [OMPI users] Question about scheduler support";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 15 14:09:37 2014" -->
<!-- isoreceived="20140515180937" -->
<!-- sent="Thu, 15 May 2014 11:07:50 -0700" -->
<!-- isosent="20140515180750" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Question about scheduler support" -->
<!-- id="8D6CC217-E21A-4A6B-82AC-3DBF8110F923_at_open-mpi.org" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="5375007A.8030102_at_ldeo.columbia.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] Question about scheduler support<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-05-15 14:07:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24386.php">Mark Hahn: "Re: [OMPI users] How to replace --cpus-per-proc by --map-by"</a>
<li><strong>Previous message:</strong> <a href="24384.php">Gus Correa: "Re: [OMPI users] Question about scheduler support"</a>
<li><strong>In reply to:</strong> <a href="24384.php">Gus Correa: "Re: [OMPI users] Question about scheduler support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24397.php">Fabricio Cannini: "Re: [OMPI users] Question about scheduler support"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Gus
<br>
<p>The issue is that you have to work thru all the various components (leafing thru the code base) to construct a list of all the things you *don't* want to build. By default, we build *everything*, so there is no current method to simply &quot;build only what I want&quot;.
<br>
<p>For those building static, for example, this results in a much larger binary than really necessary. Those wanting a minimal build to avoid confusion (e.g., &quot;why do i show slurm when I'm running moab?&quot;) face a similar issue.
<br>
<p>What we agree on is the need to provide the &quot;build only what I want&quot; capability. What Maxime has proposed is one way of doing that for at least the schedulers. Jeff and I are discussing additional options.
<br>
<p><p>On May 15, 2014, at 10:59 AM, Gus Correa &lt;gus_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi List
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Sorry, but I confess I am having a hard time to understand
</span><br>
<span class="quotelev1">&gt; all the fuss about this.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; At least in OMPI 1.6.5 there are already
</span><br>
<span class="quotelev1">&gt; two configure options that just knock out support for slurm and
</span><br>
<span class="quotelev1">&gt; loadleveler if they are set to &quot;no&quot;, hopefully for the joy of everybody
</span><br>
<span class="quotelev1">&gt; that want lean and mean OMPI installations.
</span><br>
<span class="quotelev1">&gt; (Maybe those options are available in OMPI 1.8.1 also?
</span><br>
<span class="quotelev1">&gt; I haven't tried it.)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Just configure:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --with-slurm=no --with-loadleveler=no
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; One could go on and on and make a comprehensive list of all options
</span><br>
<span class="quotelev1">&gt; that one wants in/out, and configure with/without all of them.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; **
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Isn't this level of simplicity, effectiveness, and of
</span><br>
<span class="quotelev1">&gt; standard use of configure options, good enough for us?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Works for me.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; **
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; IMHO, what would help is to very clearly document
</span><br>
<span class="quotelev1">&gt; on the &quot;configure --help&quot; output what is the default value of
</span><br>
<span class="quotelev1">&gt; *all* options.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This would allow system administrators and other users to safely
</span><br>
<span class="quotelev1">&gt; make informed choices (or just let the defaults go, if they prefer).
</span><br>
<span class="quotelev1">&gt; Although I must say right now &quot;configure --help&quot; is not that bad at all. I am not frustrated with it. It may need only a few tweaks.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Currently the --with-slurm and --with-loadleveler options
</span><br>
<span class="quotelev1">&gt; are clearly documented as having &quot;yes&quot; as the default.
</span><br>
<span class="quotelev1">&gt; However, other options don't have so clearly documented defaults.
</span><br>
<span class="quotelev1">&gt; In particular -with-tm Torque (which seems to depend on its libraries and headers being found or not by configure).
</span><br>
<span class="quotelev1">&gt; By contrast --with-sge clearly says &quot;no&quot; is the default.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This covers pretty much all free/open source schedulers,
</span><br>
<span class="quotelev1">&gt; correct me if I am wrong, please.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; LSF seems not to have a clearly documented default also.
</span><br>
<span class="quotelev1">&gt; But LSF is for the rich. I am out.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; My 2 cents, 2nd edition, out of print.
</span><br>
<span class="quotelev1">&gt; Bye, thanks, regards.
</span><br>
<span class="quotelev1">&gt; Gus Correa
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 05/15/2014 09:35 AM, Jeff Squyres (jsquyres) wrote:
</span><br>
<span class="quotelev2">&gt;&gt; These are all good points -- thanks for the feedback.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Just to be clear: my point about the menu system was to generate file that could be used for subsequent installs, very specifically targeted at those who want/need scriptable installations.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; One possible scenario could be: you download OMPI, run the menu installer so that you can see the options that are available, pick the ones you want, generate the file, and then use it in automated installs (e.g., ./configure --only-build-this-stuff=file_I_created_from_menu_installer).
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I am presuming that the generated file will be text, so it could be built/edited by hand, too.  This is heavily inspired by the Linux kernel's &quot;make menuconfig&quot;: it generates a .config file that you can use for subsequent builds.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; We can also look at the possibility of providing a template file that lists all options that are available in that particular tarball (similar to the Linux kernel &quot;make config&quot;).
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; This, BTW, is one part where we need to build some new infrastructure: to register and discover all available options (history has shown that just maintaining a text file for a project the size of Open MPI is not feasible -- it'll get stale/out of date).
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Other large projects do this kind of thing; we need to see if there's any ideas/code we can borrow rather than completely re-inventing the wheel.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Again, these are just my thoughts after having thought about this for only about 30 minutes -- so this is likely quite rough and may not even resemble what we finally end up with.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On May 15, 2014, at 8:51 AM, Noam Bernstein &lt;noam.bernstein_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I&#146;m not sure how this would apply to other options, but for the scheduler, what about no scheduler-related options defaults to everything enabled (like before), but having any explicit scheduler enable option disables by default all the other schedulers? Multiple explicit enable options would enable all the requested schedulers, and disable everything else.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 														Noam
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24386.php">Mark Hahn: "Re: [OMPI users] How to replace --cpus-per-proc by --map-by"</a>
<li><strong>Previous message:</strong> <a href="24384.php">Gus Correa: "Re: [OMPI users] Question about scheduler support"</a>
<li><strong>In reply to:</strong> <a href="24384.php">Gus Correa: "Re: [OMPI users] Question about scheduler support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24397.php">Fabricio Cannini: "Re: [OMPI users] Question about scheduler support"</a>
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
