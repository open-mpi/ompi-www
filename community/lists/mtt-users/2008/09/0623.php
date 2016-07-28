<?
$subject_val = "Re: [MTT users] Patch to add --local-scratch option";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep 19 12:43:58 2008" -->
<!-- isoreceived="20080919164358" -->
<!-- sent="Fri, 19 Sep 2008 12:43:54 -0400" -->
<!-- isosent="20080919164354" -->
<!-- name="Tim Mattox" -->
<!-- email="timattox_at_[hidden]" -->
<!-- subject="Re: [MTT users] Patch to add --local-scratch option" -->
<!-- id="ea86ce220809190943t27225052u4327ee6ecdb0975a_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20080919152357.GB24596_at_sun.com" -->
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
<strong>Subject:</strong> Re: [MTT users] Patch to add --local-scratch option<br>
<strong>From:</strong> Tim Mattox (<em>timattox_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-09-19 12:43:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0624.php">Jeff Squyres: "Re: [MTT users] Patch to add --local-scratch option"</a>
<li><strong>Previous message:</strong> <a href="0622.php">Ethan Mallove: "Re: [MTT users] Patch to add --local-scratch option"</a>
<li><strong>In reply to:</strong> <a href="0622.php">Ethan Mallove: "Re: [MTT users] Patch to add --local-scratch option"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0624.php">Jeff Squyres: "Re: [MTT users] Patch to add --local-scratch option"</a>
<li><strong>Reply:</strong> <a href="0624.php">Jeff Squyres: "Re: [MTT users] Patch to add --local-scratch option"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I've also been thinking about this a bit more, and although
<br>
having the name match the INI section name has some appeal,
<br>
I ultimately think the best name is: --mpi-build-scratch, since
<br>
that is what it does.  As Ethan mentioned, the actual MPI
<br>
install goes into --scratch.  And on the other side of it,
<br>
the MPI Get also goes into --scratch.  The --mpi-build scratch
<br>
is only used for untaring/copying the MPI source tree, running
<br>
config, make, and make check.  The actual &quot;make install&quot;
<br>
simply copies the binaries from --mpi-build-scratch into --scratch.
<br>
<p>As for names like local-scratch or fast-scratch, they don't convey
<br>
what it's used for, so should it be fast-for-big-files, of fast-for-small-files?
<br>
Or similarly, &quot;local&quot; to my cluster, my node, or what?
<br>
I think mpi-build-scratch conveys the most useful meaning, since you
<br>
should pick a filesystem that is tuned (or at least not horrible) for
<br>
doing configure/make.
<br>
<p>Unfortunately, I won't have time today to get the patch adjusted
<br>
and into svn.  Maybe on Monday.
<br>
<p>On Fri, Sep 19, 2008 at 11:23 AM, Ethan Mallove &lt;ethan.mallove_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; On Thu, Sep/18/2008 05:35:13PM, Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt; On Sep 18, 2008, at 10:45 AM, Ethan Mallove wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Ah, yeah, ok, now I see why you wouldl call it --mpi-install-scratch, so
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; that it matches the MTT ini section name.  Sure, that works for me.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Since this does seem like a feature that should eventually
</span><br>
<span class="quotelev3">&gt;&gt;&gt; propogate to all the other phases (except for Test run),
</span><br>
<span class="quotelev3">&gt;&gt;&gt; what will we call the option to group all the fast phase
</span><br>
<span class="quotelev3">&gt;&gt;&gt; scratches?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --scratch
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; :-)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Seriously, *if* we ever implement the other per-phase scratches, I think
</span><br>
<span class="quotelev2">&gt;&gt; having one overall --scratch and fine-grained per-phase specifications
</span><br>
<span class="quotelev2">&gt;&gt; fine.  I don't think we need to go overboard to have a way to say I want
</span><br>
<span class="quotelev2">&gt;&gt; phases X, Y, and Z to use scratch A.  Meaning that you could just use
</span><br>
<span class="quotelev2">&gt;&gt; --X-scratch=A --Y-scratch=A and --Z-scratch=A.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --mpi-install-scratch actually has MTT install (using
</span><br>
<span class="quotelev1">&gt; DESTDIR) into --scratch. Is that confusing? Though
</span><br>
<span class="quotelev1">&gt; --fast-scratch could also be misleading, as I could see a
</span><br>
<span class="quotelev1">&gt; user thinking that --fast-scratch will do some magical
</span><br>
<span class="quotelev1">&gt; optimization to make their NFS directory go faster. I guess
</span><br>
<span class="quotelev1">&gt; I'm done splitting hairs over --mpi-install-scratch :-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Ethan
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; Cisco Systems
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; mtt-users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; mtt-users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; mtt-users mailing list
</span><br>
<span class="quotelev1">&gt; mtt-users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Tim Mattox, Ph.D. - <a href="http://homepage.mac.com/tmattox/">http://homepage.mac.com/tmattox/</a>
 tmattox_at_[hidden] || timattox_at_[hidden]
    I'm a bright... <a href="http://www.the-brights.net/">http://www.the-brights.net/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0624.php">Jeff Squyres: "Re: [MTT users] Patch to add --local-scratch option"</a>
<li><strong>Previous message:</strong> <a href="0622.php">Ethan Mallove: "Re: [MTT users] Patch to add --local-scratch option"</a>
<li><strong>In reply to:</strong> <a href="0622.php">Ethan Mallove: "Re: [MTT users] Patch to add --local-scratch option"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0624.php">Jeff Squyres: "Re: [MTT users] Patch to add --local-scratch option"</a>
<li><strong>Reply:</strong> <a href="0624.php">Jeff Squyres: "Re: [MTT users] Patch to add --local-scratch option"</a>
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
