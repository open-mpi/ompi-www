<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Apr  4 08:44:33 2007" -->
<!-- isoreceived="20070404124433" -->
<!-- sent="Wed, 04 Apr 2007 14:44:27 +0200" -->
<!-- isosent="20070404124427" -->
<!-- name="Marcin Dulak" -->
<!-- email="Marcin_Dulak_at_[hidden]" -->
<!-- subject="Re: [OMPI users] problems with profile.d scripts generated using openmpi.spec" -->
<!-- id="46139DAB.5030601_at_poczta.onet.pl" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="95692B3C-3016-4959-BAA5-8E70AA40B451_at_cisco.com" -->
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
<strong>From:</strong> Marcin Dulak (<em>Marcin_Dulak_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-04-04 08:44:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3011.php">Ralph H Castain: "Re: [OMPI users] Open MPI error when using MPI_Comm_spawn"</a>
<li><strong>Previous message:</strong> <a href="3009.php">Bas van der Vlies: "Re: [OMPI users] [Re:  Memory leak in openmpi-1.2?]"</a>
<li><strong>In reply to:</strong> <a href="3004.php">Jeff Squyres: "Re: [OMPI users] problems with profile.d scripts generated using openmpi.spec"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3023.php">Jeff Squyres: "Re: [OMPI users] problems with profile.d scripts generated using openmpi.spec"</a>
<li><strong>Reply:</strong> <a href="3023.php">Jeff Squyres: "Re: [OMPI users] problems with profile.d scripts generated using openmpi.spec"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thank your for comments.
<br>
1) I'am using
<br>
GNU bash, version 3.00.15(1)-release (i686-redhat-linux-gnu)
<br>
To see the problem with the original
<br>
<p>eval &quot;set %{configure_options}&quot;
<br>
<p>I start the configure_options with -- in buildrpm.sh, like this:
<br>
<p>configure_options=&quot;--with-tm=/usr/local FC=pgf90 F77=pgf90 CC=pgcc CXX=pgCC CFLAGS=-Msignextend CXXFLAGS=-Msignextend --with-wrapper-cflags=-Msignextend --with-wrapper-cxxflags=-Msignextend FFLAGS=-Msignextend FCFLAGS=-Msignextend --with-wrapper-fflags=-Msignextend --with-wrapper-fcflags=-Msignextend&quot;
<br>
<p>Or to see the problem directly, I go to the shell:
<br>
sh; set --w
<br>
sh: set: --: invalid option
<br>
set: usage: set [--abefhkmnptuvxBCHP] [-o option] [arg ...]
<br>
<p>2)
<br>
if (&quot;\$LD_LIBRARY_PATH&quot; !~ *%{_libdir}*) then
<br>
is the only possibility which works for me.
<br>
<p>I'am using
<br>
tcsh 6.13.00 (Astron) 2004-05-19 (i386-intel-linux) options 8b,nls,dl,al,kan,rh,color,dspm,filec
<br>
<p>If I use &quot;%{_libdir}&quot;, then every time I
<br>
source /opt/openmpi/1.2/bin/mpivars-1.2.csh
<br>
a new entry of opemnpi is prepended, so the LD_LIBRARY_PATH is growing.
<br>
The same if I use  
<br>
&quot;*%{_libdir}*&quot;
<br>
it seems that with the double quotes the shell despite the pattern comparison requested by !~ uses literal matching.
<br>
<p>3) 
<br>
<p>using
<br>
<p>setenv MANPATH %{_mandir}:
<br>
<p>(with the colon (:) included), if I start from empty MANPATH
<br>
<p>unsetenv MANPATH
<br>
<p>and run
<br>
<p>source /opt/openmpi/1.2/bin/mpivars-1.2.csh
<br>
<p>I get
<br>
echo $MANPATH
<br>
<p>/opt/openmpi/1.2/man:
<br>
<p>I tried to google for something like
<br>
<p>also include the default MANPATH
<br>
<p>but I cannot find anything. What is the meaning of this colon at the end?
<br>
<p>Marcin
<br>
<p>Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; On Apr 4, 2007, at 4:50 AM, Marcin Dulak wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; Thank you for the links.
</span><br>
<span class="quotelev2">&gt;&gt; I tried the  Revision 14205 of  openmpi.spec and it works for me  
</span><br>
<span class="quotelev2">&gt;&gt; only after some changes:
</span><br>
<span class="quotelev2">&gt;&gt; - in the mpivars-1.2.csh script part,
</span><br>
<span class="quotelev2">&gt;&gt; - and related to the line 330 in the original (14205) openmpi.spec:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; eval &quot;set %{configure_options}&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; which will fail, if configure_options starts with --, in which case  
</span><br>
<span class="quotelev2">&gt;&gt; it will be interpreted as an option to set.
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hmm.  I did not have this problem.  What version of shell are you using?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I can apply this change because it's harmless, but I'm curious as to  
</span><br>
<span class="quotelev1">&gt; why I did not see the same problem.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; See below for more comments.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; --- openmpi.spec	2007-04-04 09:34:12.397722000 +0200
</span><br>
<span class="quotelev2">&gt;&gt; +++ openmpi-fixed.spec	2007-04-04 10:25:26.648442000 +0200
</span><br>
<span class="quotelev2">&gt;&gt; @@ -327,7 +327,8 @@
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  if test &quot;$using_gcc&quot; = &quot;1&quot;; then
</span><br>
<span class="quotelev2">&gt;&gt;      # Do wretched things to find a CC=* token
</span><br>
<span class="quotelev2">&gt;&gt; -    eval &quot;set %{configure_options}&quot;
</span><br>
<span class="quotelev2">&gt;&gt; +    # Remove starting --*, as it is interpreted as an option to set
</span><br>
<span class="quotelev2">&gt;&gt; +    eval &quot;set `echo %{configure_options} | sed 's/--*//'`&quot;
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; See comment above.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt;      compiler=
</span><br>
<span class="quotelev2">&gt;&gt;      while test &quot;$1&quot; != &quot;&quot; -a &quot;$compiler&quot; = &quot;&quot;; do
</span><br>
<span class="quotelev2">&gt;&gt;           case &quot;$1&quot; in
</span><br>
<span class="quotelev2">&gt;&gt; @@ -449,7 +450,7 @@
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  # LD_LIBRARY_PATH
</span><br>
<span class="quotelev2">&gt;&gt;  if (&quot;1&quot; == &quot;\$?LD_LIBRARY_PATH&quot;) then
</span><br>
<span class="quotelev2">&gt;&gt; -    if (&quot;\$LD_LIBRARY_PATH&quot; =~ &quot;'*%{_libdir}*'&quot;) then
</span><br>
<span class="quotelev2">&gt;&gt; +    if (&quot;\$LD_LIBRARY_PATH&quot; !~ *%{_libdir}*) then
</span><br>
<span class="quotelev2">&gt;&gt;          setenv LD_LIBRARY_PATH %{_libdir}:\${LD_LIBRARY_PATH}
</span><br>
<span class="quotelev2">&gt;&gt;      endif
</span><br>
<span class="quotelev2">&gt;&gt;  else
</span><br>
<span class="quotelev2">&gt;&gt; @@ -458,11 +459,11 @@
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  # MANPATH
</span><br>
<span class="quotelev2">&gt;&gt;  if (&quot;1&quot; == &quot;\$?MANPATH&quot;) then
</span><br>
<span class="quotelev2">&gt;&gt; -    if (&quot;\$MANPATH&quot; =~ '*%{_mandir}*'&quot;) then
</span><br>
<span class="quotelev2">&gt;&gt; +    if (&quot;\$MANPATH&quot; !~ *%{_mandir}*) then
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Fixed the above 2 typos, although the *'s should also disappear and  
</span><br>
<span class="quotelev1">&gt; the double quotes should remain (the %{_mandir} one was actually  
</span><br>
<span class="quotelev1">&gt; broken).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt;          setenv MANPATH %{_mandir}:\${MANPATH}
</span><br>
<span class="quotelev2">&gt;&gt;      endif
</span><br>
<span class="quotelev2">&gt;&gt;  else
</span><br>
<span class="quotelev2">&gt;&gt; -    setenv MANPATH %{_mandir}:
</span><br>
<span class="quotelev2">&gt;&gt; +    setenv MANPATH %{_mandir}
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The : at the end of the string is intentional.  Its presence means  
</span><br>
<span class="quotelev1">&gt; &quot;also include the default MANPATH&quot;.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-3010/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3011.php">Ralph H Castain: "Re: [OMPI users] Open MPI error when using MPI_Comm_spawn"</a>
<li><strong>Previous message:</strong> <a href="3009.php">Bas van der Vlies: "Re: [OMPI users] [Re:  Memory leak in openmpi-1.2?]"</a>
<li><strong>In reply to:</strong> <a href="3004.php">Jeff Squyres: "Re: [OMPI users] problems with profile.d scripts generated using openmpi.spec"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3023.php">Jeff Squyres: "Re: [OMPI users] problems with profile.d scripts generated using openmpi.spec"</a>
<li><strong>Reply:</strong> <a href="3023.php">Jeff Squyres: "Re: [OMPI users] problems with profile.d scripts generated using openmpi.spec"</a>
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
