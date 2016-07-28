<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Apr  4 17:40:30 2007" -->
<!-- isoreceived="20070404214030" -->
<!-- sent="Wed, 4 Apr 2007 17:39:57 -0400" -->
<!-- isosent="20070404213957" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] problems with profile.d scripts generated using openmpi.spec" -->
<!-- id="EE226B9A-FBDE-41EA-B9F5-71DDAB9FC312_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="46139DAB.5030601_at_poczta.onet.pl" -->
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
<strong>Date:</strong> 2007-04-04 17:39:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3024.php">Jeff Stuart: "Re: [OMPI users] problem with MPI_Bcast over etherne"</a>
<li><strong>Previous message:</strong> <a href="3022.php">Jeff Squyres: "Re: [OMPI users] btl_tcp_endpoint errors"</a>
<li><strong>In reply to:</strong> <a href="3010.php">Marcin Dulak: "Re: [OMPI users] problems with profile.d scripts generated using openmpi.spec"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Apr 4, 2007, at 8:44 AM, Marcin Dulak wrote:
<br>
<p><span class="quotelev1">&gt; Thank your for comments.
</span><br>
<span class="quotelev1">&gt; 1) I'am using
</span><br>
<span class="quotelev1">&gt; GNU bash, version 3.00.15(1)-release (i686-redhat-linux-gnu)
</span><br>
<span class="quotelev1">&gt; To see the problem with the original
</span><br>
<span class="quotelev1">&gt; eval &quot;set %{configure_options}&quot; I start the configure_options with  
</span><br>
<span class="quotelev1">&gt; -- in buildrpm.sh, like this: configure_options=&quot;--with-tm=/usr/ 
</span><br>
<span class="quotelev1">&gt; local FC=pgf90 F77=pgf90 CC=pgcc CXX=pgCC CFLAGS=-Msignextend  
</span><br>
<span class="quotelev1">&gt; CXXFLAGS=-Msignextend --with-wrapper-cflags=-Msignextend --with- 
</span><br>
<span class="quotelev1">&gt; wrapper-cxxflags=-Msignextend FFLAGS=-Msignextend FCFLAGS=- 
</span><br>
<span class="quotelev1">&gt; Msignextend --with-wrapper-fflags=-Msignextend --with-wrapper- 
</span><br>
<span class="quotelev1">&gt; fcflags=-Msignextend&quot; Or to see the problem directly, I go to the  
</span><br>
<span class="quotelev1">&gt; shell: sh; set --w sh: set: --: invalid option set: usage: set [-- 
</span><br>
<span class="quotelev1">&gt; abefhkmnptuvxBCHP] [-o option] [arg ...]
</span><br>
<p>(wow, my mail client really munged your formatting... :-\ )
<br>
<p>I see why I didn't run into this before.  I did all my testing within  
<br>
the context of the OFED 1.2 installer, and we always pass in  
<br>
configure_options that start with a token that does not start with  
<br>
--.  Hence, &quot;set&quot; knew to ignore the -- prefixed options.
<br>
<p>So it looks like a slightly less intrusive fix would actually be to  
<br>
use the following:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;eval &quot;set -- %{configure_options}&quot;
<br>
<p><span class="quotelev1">&gt; 2) if (&quot;\$LD_LIBRARY_PATH&quot; !~ *%{_libdir}*) then is the only  
</span><br>
<span class="quotelev1">&gt; possibility which works for me. I'am using tcsh 6.13.00 (Astron)  
</span><br>
<span class="quotelev1">&gt; 2004-05-19 (i386-intel-linux) options  
</span><br>
<span class="quotelev1">&gt; 8b,nls,dl,al,kan,rh,color,dspm,filec If I use &quot;%{_libdir}&quot;, then  
</span><br>
<span class="quotelev1">&gt; every time I source /opt/openmpi/1.2/bin/mpivars-1.2.csh a new  
</span><br>
<span class="quotelev1">&gt; entry of opemnpi is prepended, so the LD_LIBRARY_PATH is growing.  
</span><br>
<span class="quotelev1">&gt; The same if I use &quot;*%{_libdir}*&quot; it seems that with the double  
</span><br>
<span class="quotelev1">&gt; quotes the shell despite the pattern comparison requested by !~  
</span><br>
<span class="quotelev1">&gt; uses literal matching.
</span><br>
<p>I just went and read the man page on this (should have done this  
<br>
before): it says that the =~ and !~ operators are glob-style  
<br>
matching.  So the * prefix and suffix is correct -- thanks for  
<br>
pointing that out.
<br>
<p>I was trying to use &quot;&quot; to protect multi-word strings, but I can't  
<br>
seem to find a syntax that works for multi-word strings on the right  
<br>
hand side.  Oh well; there's probably other stuff in OMPI that will  
<br>
break if use you spaces in the prefix -- I'm ok with this for now.
<br>
<p>I'll fix up these in SVN.
<br>
<p><span class="quotelev1">&gt; 3) using setenv MANPATH %{_mandir}: (with the colon (:) included),  
</span><br>
<span class="quotelev1">&gt; if I start from empty MANPATH
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; unsetenv MANPATH
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; and run
</span><br>
<span class="quotelev1">&gt; source /opt/openmpi/1.2/bin/mpivars-1.2.csh
</span><br>
<span class="quotelev1">&gt; I get
</span><br>
<span class="quotelev1">&gt; echo $MANPATH
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /opt/openmpi/1.2/man:
</span><br>
<p>Right.
<br>
<p><span class="quotelev1">&gt; I tried to google for something like
</span><br>
<span class="quotelev1">&gt; also include the default MANPATHbut I cannot find anything. What is  
</span><br>
<span class="quotelev1">&gt; the meaning of this colon at the end?
</span><br>
<p>I believe that I found this option long ago by trial and error in the  
<br>
OSCAR project.  I just trolled through the man documentation right  
<br>
now and [still] can't find it documented anywhere.  :-\
<br>
<p>The trailing : means &quot;put all the options listed in man.conf here&quot;.   
<br>
If you don't do that, then the contents of MANPATH wholly replaces  
<br>
what is listed in man.conf.  For example (I'm a C shell kind of guy):
<br>
<p># With no $MANPATH
<br>
shell% man ls
<br>
...get ls man page...
<br>
<p># Set MANPATH to a directory with no trailing :
<br>
shell% setenv MANPATH /opt/intel/9.1/man
<br>
shell% man icc
<br>
...get icc man page...
<br>
shell% man ls
<br>
No manual entry for ls
<br>
<p># Set MANPATH to a directory with a trailing :
<br>
shell% setenv MANPATH /opt/intel/9.1/man:
<br>
shell% man icc
<br>
...get icc man page...
<br>
shell% man ls
<br>
...get ls man page...
<br>
<p>Thanks for the bug reports and your persistence!
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
<li><strong>Next message:</strong> <a href="3024.php">Jeff Stuart: "Re: [OMPI users] problem with MPI_Bcast over etherne"</a>
<li><strong>Previous message:</strong> <a href="3022.php">Jeff Squyres: "Re: [OMPI users] btl_tcp_endpoint errors"</a>
<li><strong>In reply to:</strong> <a href="3010.php">Marcin Dulak: "Re: [OMPI users] problems with profile.d scripts generated using openmpi.spec"</a>
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
