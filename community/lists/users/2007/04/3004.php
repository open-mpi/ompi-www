<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Apr  4 07:44:22 2007" -->
<!-- isoreceived="20070404114422" -->
<!-- sent="Wed, 4 Apr 2007 07:43:54 -0400" -->
<!-- isosent="20070404114354" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] problems with profile.d scripts generated using openmpi.spec" -->
<!-- id="95692B3C-3016-4959-BAA5-8E70AA40B451_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="461366E9.700_at_poczta.onet.pl" -->
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
<strong>Date:</strong> 2007-04-04 07:43:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3005.php">Tim Mattox: "Re: [OMPI users] [Re: Memory leak in openmpi-1.2?]"</a>
<li><strong>Previous message:</strong> <a href="3003.php">Jeff Squyres: "Re: [OMPI users] (no subject)"</a>
<li><strong>In reply to:</strong> <a href="2999.php">Marcin Dulak: "Re: [OMPI users] problems with profile.d scripts generated using openmpi.spec"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3010.php">Marcin Dulak: "Re: [OMPI users] problems with profile.d scripts generated using openmpi.spec"</a>
<li><strong>Reply:</strong> <a href="3010.php">Marcin Dulak: "Re: [OMPI users] problems with profile.d scripts generated using openmpi.spec"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Apr 4, 2007, at 4:50 AM, Marcin Dulak wrote:
<br>
<p><span class="quotelev1">&gt; Thank you for the links.
</span><br>
<span class="quotelev1">&gt; I tried the  Revision 14205 of  openmpi.spec and it works for me  
</span><br>
<span class="quotelev1">&gt; only after some changes:
</span><br>
<span class="quotelev1">&gt; - in the mpivars-1.2.csh script part,
</span><br>
<span class="quotelev1">&gt; - and related to the line 330 in the original (14205) openmpi.spec:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; eval &quot;set %{configure_options}&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; which will fail, if configure_options starts with --, in which case  
</span><br>
<span class="quotelev1">&gt; it will be interpreted as an option to set.
</span><br>
<p>Hmm.  I did not have this problem.  What version of shell are you using?
<br>
<p>I can apply this change because it's harmless, but I'm curious as to  
<br>
why I did not see the same problem.
<br>
<p>See below for more comments.
<br>
<p><span class="quotelev1">&gt; --- openmpi.spec	2007-04-04 09:34:12.397722000 +0200
</span><br>
<span class="quotelev1">&gt; +++ openmpi-fixed.spec	2007-04-04 10:25:26.648442000 +0200
</span><br>
<span class="quotelev1">&gt; @@ -327,7 +327,8 @@
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  if test &quot;$using_gcc&quot; = &quot;1&quot;; then
</span><br>
<span class="quotelev1">&gt;      # Do wretched things to find a CC=* token
</span><br>
<span class="quotelev1">&gt; -    eval &quot;set %{configure_options}&quot;
</span><br>
<span class="quotelev1">&gt; +    # Remove starting --*, as it is interpreted as an option to set
</span><br>
<span class="quotelev1">&gt; +    eval &quot;set `echo %{configure_options} | sed 's/--*//'`&quot;
</span><br>
<p>See comment above.
<br>
<p><span class="quotelev1">&gt;      compiler=
</span><br>
<span class="quotelev1">&gt;      while test &quot;$1&quot; != &quot;&quot; -a &quot;$compiler&quot; = &quot;&quot;; do
</span><br>
<span class="quotelev1">&gt;           case &quot;$1&quot; in
</span><br>
<span class="quotelev1">&gt; @@ -449,7 +450,7 @@
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  # LD_LIBRARY_PATH
</span><br>
<span class="quotelev1">&gt;  if (&quot;1&quot; == &quot;\$?LD_LIBRARY_PATH&quot;) then
</span><br>
<span class="quotelev1">&gt; -    if (&quot;\$LD_LIBRARY_PATH&quot; =~ &quot;'*%{_libdir}*'&quot;) then
</span><br>
<span class="quotelev1">&gt; +    if (&quot;\$LD_LIBRARY_PATH&quot; !~ *%{_libdir}*) then
</span><br>
<span class="quotelev1">&gt;          setenv LD_LIBRARY_PATH %{_libdir}:\${LD_LIBRARY_PATH}
</span><br>
<span class="quotelev1">&gt;      endif
</span><br>
<span class="quotelev1">&gt;  else
</span><br>
<span class="quotelev1">&gt; @@ -458,11 +459,11 @@
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  # MANPATH
</span><br>
<span class="quotelev1">&gt;  if (&quot;1&quot; == &quot;\$?MANPATH&quot;) then
</span><br>
<span class="quotelev1">&gt; -    if (&quot;\$MANPATH&quot; =~ '*%{_mandir}*'&quot;) then
</span><br>
<span class="quotelev1">&gt; +    if (&quot;\$MANPATH&quot; !~ *%{_mandir}*) then
</span><br>
<p>Fixed the above 2 typos, although the *'s should also disappear and  
<br>
the double quotes should remain (the %{_mandir} one was actually  
<br>
broken).
<br>
<p><span class="quotelev1">&gt;          setenv MANPATH %{_mandir}:\${MANPATH}
</span><br>
<span class="quotelev1">&gt;      endif
</span><br>
<span class="quotelev1">&gt;  else
</span><br>
<span class="quotelev1">&gt; -    setenv MANPATH %{_mandir}:
</span><br>
<span class="quotelev1">&gt; +    setenv MANPATH %{_mandir}
</span><br>
<p>The : at the end of the string is intentional.  Its presence means  
<br>
&quot;also include the default MANPATH&quot;.
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3005.php">Tim Mattox: "Re: [OMPI users] [Re: Memory leak in openmpi-1.2?]"</a>
<li><strong>Previous message:</strong> <a href="3003.php">Jeff Squyres: "Re: [OMPI users] (no subject)"</a>
<li><strong>In reply to:</strong> <a href="2999.php">Marcin Dulak: "Re: [OMPI users] problems with profile.d scripts generated using openmpi.spec"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3010.php">Marcin Dulak: "Re: [OMPI users] problems with profile.d scripts generated using openmpi.spec"</a>
<li><strong>Reply:</strong> <a href="3010.php">Marcin Dulak: "Re: [OMPI users] problems with profile.d scripts generated using openmpi.spec"</a>
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
