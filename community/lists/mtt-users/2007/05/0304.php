<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue May 22 11:10:22 2007" -->
<!-- isoreceived="20070522151022" -->
<!-- sent="Tue, 22 May 2007 11:10:44 -0400" -->
<!-- isosent="20070522151044" -->
<!-- name="Ethan Mallove" -->
<!-- email="ethan.mallove_at_[hidden]" -->
<!-- subject="Re: [MTT users] Failure tracking (RE: #70: Show &amp;quot;new&amp;quot; failures)" -->
<!-- id="20070522151044.GG6879_at_sun.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="7E79FEF1-4FD0-4B60-8D2A-E90D7B46C678_at_cisco.com" -->
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
<strong>From:</strong> Ethan Mallove (<em>ethan.mallove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-05-22 11:10:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0305.php">Ethan Mallove: "[MTT users] Few trunk results this morning?"</a>
<li><strong>Previous message:</strong> <a href="0303.php">Jeff Squyres: "Re: [MTT users] Failure tracking (RE: #70: Show &quot;new&quot; failures)"</a>
<li><strong>In reply to:</strong> <a href="0303.php">Jeff Squyres: "Re: [MTT users] Failure tracking (RE: #70: Show &quot;new&quot; failures)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Tue, May/22/2007 07:36:42AM, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; I'm assuming that this is a per-user kind of setting,
</span><br>
<span class="quotelev1">&gt; right? (e.g.,  stored in a cookie)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>Correct. The on/off switch is a user pref. Though the
<br>
database of filters itself is global. Do you think the
<br>
filters should be per-user too?
<br>
<p><p><span class="quotelev1">&gt; It looks promising, but I'd put better titles on the two
</span><br>
<span class="quotelev1">&gt; screens.   E.g., I'd call this results filtering, or
</span><br>
<span class="quotelev1">&gt; somesuch.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Right, this is more like a global &quot;Ignore&quot;.  I guess I
<br>
called it &quot;failure tracking&quot; in the hopes that MTT would
<br>
someday be able to magically populate the &quot;failure&quot; table by
<br>
itself.
<br>
<p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On May 21, 2007, at 3:42 PM, Ethan Mallove wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I have something to help filter out (in reporter.php) old
</span><br>
<span class="quotelev2">&gt; &gt; known OMPI failures, though this feature is still in an
</span><br>
<span class="quotelev2">&gt; &gt; embryonic stage.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; E.g., here's a link that shows *all* of Sun's recent Test
</span><br>
<span class="quotelev2">&gt; &gt; Run failures.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/~emallove/mtt_/reporter.php?do_redir=199">http://www.open-mpi.org/~emallove/mtt_/reporter.php?do_redir=199</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; If I don't care to sift through all the SPARC &quot;alignment&quot;
</span><br>
<span class="quotelev2">&gt; &gt; errors that are already in our bug tracking system, I can
</span><br>
<span class="quotelev2">&gt; &gt; add that failure here at the below link.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/~emallove/mtt_/track-failures/?screen=Insert">http://www.open-mpi.org/~emallove/mtt_/track-failures/?screen=Insert</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; The HTML form would like something like this:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;   Field: &quot;Hardware&quot; Value: _sun4u_
</span><br>
<span class="quotelev2">&gt; &gt;   Field: &quot;Stdout&quot;   Value: _invalid address alignment_
</span><br>
<span class="quotelev2">&gt; &gt;   (The remaining 8 rows of the form would be left blank)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; One can see the entire database of failures in
</span><br>
<span class="quotelev2">&gt; &gt; &quot;Delete Mode&quot;. E.g.,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/~emallove/mtt_/track-failures/?screen=Delete">http://www.open-mpi.org/~emallove/mtt_/track-failures/?screen=Delete</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; E.g., now if I don't care to see the alignment errors, I can
</span><br>
<span class="quotelev2">&gt; &gt; checkbox the &quot;Filter tracked failures&quot; box in Preferences.
</span><br>
<span class="quotelev2">&gt; &gt; Voil?:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/~emallove/mtt_/reporter.php?do_redir=200">http://www.open-mpi.org/~emallove/mtt_/reporter.php?do_redir=200</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thoughts?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; -Ethan
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; mtt-users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; mtt-users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
</span><br>
<span class="quotelev1">&gt; 
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
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; mtt-users mailing list
</span><br>
<span class="quotelev1">&gt; mtt-users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0305.php">Ethan Mallove: "[MTT users] Few trunk results this morning?"</a>
<li><strong>Previous message:</strong> <a href="0303.php">Jeff Squyres: "Re: [MTT users] Failure tracking (RE: #70: Show &quot;new&quot; failures)"</a>
<li><strong>In reply to:</strong> <a href="0303.php">Jeff Squyres: "Re: [MTT users] Failure tracking (RE: #70: Show &quot;new&quot; failures)"</a>
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
