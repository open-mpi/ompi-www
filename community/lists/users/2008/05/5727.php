<?
$subject_val = "Re: [OMPI users] More OpenMPI errors: how to debug?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May 23 16:09:16 2008" -->
<!-- isoreceived="20080523200916" -->
<!-- sent="Fri, 23 May 2008 13:09:05 -0700" -->
<!-- isosent="20080523200905" -->
<!-- name="Jim Kusznir" -->
<!-- email="jkusznir_at_[hidden]" -->
<!-- subject="Re: [OMPI users] More OpenMPI errors: how to debug?" -->
<!-- id="df8c8a6d0805231309w2d067db9xa57aa8eae263a368_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="EC37FC83-48E1-4D34-97A8-03D264C4DDB9_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] More OpenMPI errors: how to debug?<br>
<strong>From:</strong> Jim Kusznir (<em>jkusznir_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-05-23 16:09:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5728.php">Jim Kusznir: "Re: [OMPI users] OpenMPI+PGI errors"</a>
<li><strong>Previous message:</strong> <a href="5726.php">Jeff Squyres: "Re: [OMPI users] More OpenMPI errors: how to debug?"</a>
<li><strong>In reply to:</strong> <a href="5726.php">Jeff Squyres: "Re: [OMPI users] More OpenMPI errors: how to debug?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Well, it turns out that the path OpenMPI looks for things seems at
<br>
least partially hard-coded.  I've got some &quot;wierd pathing&quot; here on my
<br>
rocks cluster:
<br>
<p>/opt is local;
<br>
/share/apps is exported from the headnode and available on all nodes.
<br>
On the head node, /opt is symlinked to /share/apps
<br>
<p>I set my environment modules such that openmpi-1.2.6 is located in
<br>
/share/apps/openmpi-pgi/1.2.6.  However, when I ran it on a compute
<br>
node, it ran into that error.  When I installed the runtime directly
<br>
on the compute node (placing it in /opt), but still left the
<br>
module/pathing the same, it worked.  I am thinking about making /opt a
<br>
symlink across the cluster, but I'm not sure about all the
<br>
implications therein...
<br>
<p>--Jim
<br>
<p>On Fri, May 23, 2008 at 12:07 PM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; On May 22, 2008, at 12:52 PM, Jim Kusznir wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I installed openmpi 1.2.6 on my system, but now my users are
</span><br>
<span class="quotelev2">&gt;&gt; complaining about even more errors.  I'm getting this:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [compute-0-23.local:26164] [NO-NAME] ORTE_ERROR_LOG: Not found in file
</span><br>
<span class="quotelev2">&gt;&gt; runtime/orte_init_stage1.c at line 182
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; Sorry!  You were supposed to get help about:
</span><br>
<span class="quotelev2">&gt;&gt;    orte_init:startup:internal-failure
</span><br>
<span class="quotelev2">&gt;&gt; from the file:
</span><br>
<span class="quotelev2">&gt;&gt;    help-orte-runtime
</span><br>
<span class="quotelev2">&gt;&gt; But I couldn't find any file matching that name.  Sorry!
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Everything below this message is a consequence of the first message
</span><br>
<span class="quotelev1">&gt; (above).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; There's two problems here:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1. Where are the help files -- why can't OMPI find them?  That's
</span><br>
<span class="quotelev1">&gt; really weird; it suggests a broken Open MPI install.  You have a few
</span><br>
<span class="quotelev1">&gt; pending e-mails to me about RPM builds that I need to go read (I'm
</span><br>
<span class="quotelev1">&gt; sorry; I'm way backed up :-( ); I wonder if this is somehow related...?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2. The specific error that is occurring is that the ORTE layer in OMPI
</span><br>
<span class="quotelev1">&gt; is unable to initialize its out-of-band messaging system (we call it
</span><br>
<span class="quotelev1">&gt; the &quot;RML&quot;) which is *really* weird.  The only reason that I can think
</span><br>
<span class="quotelev1">&gt; that that would occur is a broken OMPI install.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is there any chance that there are some files missing from your OMPI
</span><br>
<span class="quotelev1">&gt; installs?  For example, do you see these two files under $prefix/lib/
</span><br>
<span class="quotelev1">&gt; openmpi (or wherever $pkglibdir was set to):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mca_rml_oob.la*
</span><br>
<span class="quotelev1">&gt; mca_rml_oob.so*
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
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
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5728.php">Jim Kusznir: "Re: [OMPI users] OpenMPI+PGI errors"</a>
<li><strong>Previous message:</strong> <a href="5726.php">Jeff Squyres: "Re: [OMPI users] More OpenMPI errors: how to debug?"</a>
<li><strong>In reply to:</strong> <a href="5726.php">Jeff Squyres: "Re: [OMPI users] More OpenMPI errors: how to debug?"</a>
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
