<?
$subject_val = "Re: [OMPI users] Question about scheduler support";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 15 13:59:28 2014" -->
<!-- isoreceived="20140515175928" -->
<!-- sent="Thu, 15 May 2014 13:59:22 -0400" -->
<!-- isosent="20140515175922" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Question about scheduler support" -->
<!-- id="5375007A.8030102_at_ldeo.columbia.edu" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="0BCF426A-7E77-4968-8B92-A67F4EA8A397_at_cisco.com" -->
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
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-05-15 13:59:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24385.php">Ralph Castain: "Re: [OMPI users] Question about scheduler support"</a>
<li><strong>Previous message:</strong> <a href="24383.php">Jack Stalnaker: "Re: [OMPI users] Build failure on scientific linux 5.4"</a>
<li><strong>In reply to:</strong> <a href="24382.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Question about scheduler support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24385.php">Ralph Castain: "Re: [OMPI users] Question about scheduler support"</a>
<li><strong>Reply:</strong> <a href="24385.php">Ralph Castain: "Re: [OMPI users] Question about scheduler support"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi List
<br>
<p>Sorry, but I confess I am having a hard time to understand
<br>
all the fuss about this.
<br>
<p>At least in OMPI 1.6.5 there are already
<br>
two configure options that just knock out support for slurm and
<br>
loadleveler if they are set to &quot;no&quot;, hopefully for the joy of everybody
<br>
that want lean and mean OMPI installations.
<br>
(Maybe those options are available in OMPI 1.8.1 also?
<br>
I haven't tried it.)
<br>
<p>Just configure:
<br>
<p>--with-slurm=no --with-loadleveler=no
<br>
<p>One could go on and on and make a comprehensive list of all options
<br>
that one wants in/out, and configure with/without all of them.
<br>
<p>**
<br>
<p>Isn't this level of simplicity, effectiveness, and of
<br>
standard use of configure options, good enough for us?
<br>
<p>Works for me.
<br>
<p>**
<br>
<p>IMHO, what would help is to very clearly document
<br>
on the &quot;configure --help&quot; output what is the default value of
<br>
*all* options.
<br>
<p>This would allow system administrators and other users to safely
<br>
make informed choices (or just let the defaults go, if they prefer).
<br>
Although I must say right now &quot;configure --help&quot; is not that bad at all. 
<br>
I am not frustrated with it. It may need only a few tweaks.
<br>
<p>Currently the --with-slurm and --with-loadleveler options
<br>
are clearly documented as having &quot;yes&quot; as the default.
<br>
However, other options don't have so clearly documented defaults.
<br>
In particular -with-tm Torque (which seems to depend on its libraries 
<br>
and headers being found or not by configure).
<br>
By contrast --with-sge clearly says &quot;no&quot; is the default.
<br>
<p>This covers pretty much all free/open source schedulers,
<br>
correct me if I am wrong, please.
<br>
<p>LSF seems not to have a clearly documented default also.
<br>
But LSF is for the rich. I am out.
<br>
<p>My 2 cents, 2nd edition, out of print.
<br>
Bye, thanks, regards.
<br>
Gus Correa
<br>
<p><p>On 05/15/2014 09:35 AM, Jeff Squyres (jsquyres) wrote:
<br>
<span class="quotelev1">&gt; These are all good points -- thanks for the feedback.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Just to be clear: my point about the menu system was to generate file that could be used for subsequent installs, very specifically targeted at those who want/need scriptable installations.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; One possible scenario could be: you download OMPI, run the menu installer so that you can see the options that are available, pick the ones you want, generate the file, and then use it in automated installs (e.g., ./configure --only-build-this-stuff=file_I_created_from_menu_installer).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am presuming that the generated file will be text, so it could be built/edited by hand, too.  This is heavily inspired by the Linux kernel's &quot;make menuconfig&quot;: it generates a .config file that you can use for subsequent builds.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We can also look at the possibility of providing a template file that lists all options that are available in that particular tarball (similar to the Linux kernel &quot;make config&quot;).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This, BTW, is one part where we need to build some new infrastructure: to register and discover all available options (history has shown that just maintaining a text file for a project the size of Open MPI is not feasible -- it'll get stale/out of date).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Other large projects do this kind of thing; we need to see if there's any ideas/code we can borrow rather than completely re-inventing the wheel.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Again, these are just my thoughts after having thought about this for only about 30 minutes -- so this is likely quite rough and may not even resemble what we finally end up with.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On May 15, 2014, at 8:51 AM, Noam Bernstein &lt;noam.bernstein_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I&#146;m not sure how this would apply to other options, but for the scheduler, what about no scheduler-related options defaults to everything enabled (like before), but having any explicit scheduler enable option disables by default all the other schedulers? Multiple explicit enable options would enable all the requested schedulers, and disable everything else.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 														Noam
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
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
<li><strong>Next message:</strong> <a href="24385.php">Ralph Castain: "Re: [OMPI users] Question about scheduler support"</a>
<li><strong>Previous message:</strong> <a href="24383.php">Jack Stalnaker: "Re: [OMPI users] Build failure on scientific linux 5.4"</a>
<li><strong>In reply to:</strong> <a href="24382.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Question about scheduler support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24385.php">Ralph Castain: "Re: [OMPI users] Question about scheduler support"</a>
<li><strong>Reply:</strong> <a href="24385.php">Ralph Castain: "Re: [OMPI users] Question about scheduler support"</a>
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
