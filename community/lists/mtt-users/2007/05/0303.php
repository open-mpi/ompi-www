<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue May 22 10:45:21 2007" -->
<!-- isoreceived="20070522144521" -->
<!-- sent="Tue, 22 May 2007 07:36:42 -0700" -->
<!-- isosent="20070522143642" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [MTT users] Failure tracking (RE: #70: Show &amp;quot;new&amp;quot; failures)" -->
<!-- id="7E79FEF1-4FD0-4B60-8D2A-E90D7B46C678_at_cisco.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20070521224228.GE6879_at_sun.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-05-22 10:36:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0304.php">Ethan Mallove: "Re: [MTT users] Failure tracking (RE: #70: Show &quot;new&quot; failures)"</a>
<li><strong>Previous message:</strong> <a href="0302.php">Ethan Mallove: "[MTT users] Failure tracking (RE: #70: Show &quot;new&quot; failures)"</a>
<li><strong>In reply to:</strong> <a href="0302.php">Ethan Mallove: "[MTT users] Failure tracking (RE: #70: Show &quot;new&quot; failures)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0304.php">Ethan Mallove: "Re: [MTT users] Failure tracking (RE: #70: Show &quot;new&quot; failures)"</a>
<li><strong>Reply:</strong> <a href="0304.php">Ethan Mallove: "Re: [MTT users] Failure tracking (RE: #70: Show &quot;new&quot; failures)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm assuming that this is a per-user kind of setting, right? (e.g.,  
<br>
stored in a cookie)
<br>
<p>It looks promising, but I'd put better titles on the two screens.   
<br>
E.g., I'd call this results filtering, or somesuch.
<br>
<p><p>On May 21, 2007, at 3:42 PM, Ethan Mallove wrote:
<br>
<p><span class="quotelev1">&gt; I have something to help filter out (in reporter.php) old
</span><br>
<span class="quotelev1">&gt; known OMPI failures, though this feature is still in an
</span><br>
<span class="quotelev1">&gt; embryonic stage.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; E.g., here's a link that shows *all* of Sun's recent Test
</span><br>
<span class="quotelev1">&gt; Run failures.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/~emallove/mtt_/reporter.php?do_redir=199">http://www.open-mpi.org/~emallove/mtt_/reporter.php?do_redir=199</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If I don't care to sift through all the SPARC &quot;alignment&quot;
</span><br>
<span class="quotelev1">&gt; errors that are already in our bug tracking system, I can
</span><br>
<span class="quotelev1">&gt; add that failure here at the below link.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/~emallove/mtt_/track-failures/?screen=Insert">http://www.open-mpi.org/~emallove/mtt_/track-failures/?screen=Insert</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The HTML form would like something like this:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   Field: &quot;Hardware&quot; Value: _sun4u_
</span><br>
<span class="quotelev1">&gt;   Field: &quot;Stdout&quot;   Value: _invalid address alignment_
</span><br>
<span class="quotelev1">&gt;   (The remaining 8 rows of the form would be left blank)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; One can see the entire database of failures in
</span><br>
<span class="quotelev1">&gt; &quot;Delete Mode&quot;. E.g.,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/~emallove/mtt_/track-failures/?screen=Delete">http://www.open-mpi.org/~emallove/mtt_/track-failures/?screen=Delete</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; E.g., now if I don't care to see the alignment errors, I can
</span><br>
<span class="quotelev1">&gt; checkbox the &quot;Filter tracked failures&quot; box in Preferences.
</span><br>
<span class="quotelev1">&gt; Voil&#224;:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/~emallove/mtt_/reporter.php?do_redir=200">http://www.open-mpi.org/~emallove/mtt_/reporter.php?do_redir=200</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thoughts?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Ethan
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; mtt-users mailing list
</span><br>
<span class="quotelev1">&gt; mtt-users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0304.php">Ethan Mallove: "Re: [MTT users] Failure tracking (RE: #70: Show &quot;new&quot; failures)"</a>
<li><strong>Previous message:</strong> <a href="0302.php">Ethan Mallove: "[MTT users] Failure tracking (RE: #70: Show &quot;new&quot; failures)"</a>
<li><strong>In reply to:</strong> <a href="0302.php">Ethan Mallove: "[MTT users] Failure tracking (RE: #70: Show &quot;new&quot; failures)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0304.php">Ethan Mallove: "Re: [MTT users] Failure tracking (RE: #70: Show &quot;new&quot; failures)"</a>
<li><strong>Reply:</strong> <a href="0304.php">Ethan Mallove: "Re: [MTT users] Failure tracking (RE: #70: Show &quot;new&quot; failures)"</a>
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
