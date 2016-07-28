<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Feb 15 17:53:34 2007" -->
<!-- isoreceived="20070215225334" -->
<!-- sent="Thu, 15 Feb 2007 17:53:18 -0500" -->
<!-- isosent="20070215225318" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] where do the openmpi profile.d scripts get created?" -->
<!-- id="32DB9175-921F-41BC-B11F-F7910836C6AE_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="14757771.1171402195189.JavaMail.root_at_mswamui-swiss.atl.sa.earthlink.net" -->
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
<strong>Date:</strong> 2007-02-15 17:53:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2705.php">Brian Barrett: "Re: [OMPI users] ORTE errors on simple fortran program with 1.2b3"</a>
<li><strong>Previous message:</strong> <a href="2703.php">Steven A. DuChene: "[OMPI users] ORTE errors on simple fortran program with 1.2b3"</a>
<li><strong>In reply to:</strong> <a href="2687.php">Steven A. DuChene: "[OMPI users] where do the openmpi profile.d scripts get created?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Feb 13, 2007, at 4:29 PM, Steven A. DuChene wrote:
<br>
<p><span class="quotelev1">&gt; I discovered the hard way that there are openmpi profile.d scripts  
</span><br>
<span class="quotelev1">&gt; that get
</span><br>
<span class="quotelev1">&gt; packaged into openmpi rpm files. The reason this became a painful  
</span><br>
<span class="quotelev1">&gt; issue
</span><br>
<span class="quotelev1">&gt; for our cluster is that it seems the csh profile.d script that gets  
</span><br>
<span class="quotelev1">&gt; installed
</span><br>
<span class="quotelev1">&gt; with the openmpi-runtime-1.1.4 is defective. If it gets sourced  
</span><br>
<span class="quotelev1">&gt; into a user's
</span><br>
<span class="quotelev1">&gt; environment it makes tcsh on linux error out with a &quot;if: Badly  
</span><br>
<span class="quotelev1">&gt; formed number&quot;
</span><br>
<p>Yoinks.  Well, it goes to show how many people used that SRPM.  :-)
<br>
<p>Sorry about those -- I have most of those fixed on the trunk but  
<br>
forgot to back-port most of the fixes back to the 1.1 branch SRPM  
<br>
specfile.
<br>
<p><span class="quotelev1">&gt; I want to be able to alter the spec file that builds the rpm so I  
</span><br>
<span class="quotelev1">&gt; can have it
</span><br>
<span class="quotelev1">&gt; automagically incorperate the patch we worked up to fix this issue  
</span><br>
<span class="quotelev1">&gt; but I have
</span><br>
<span class="quotelev1">&gt; not been able to figure out where in the openmpi sources that the  
</span><br>
<span class="quotelev1">&gt; profile.d
</span><br>
<span class="quotelev1">&gt; scripts for csh and sh get generated.
</span><br>
<p>They're actually generated in the specfile itself.
<br>
<p><span class="quotelev1">&gt; We had to patch the openmpi-1.1.4.csh script as follows:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -if (&quot;&quot;) then
</span><br>
<span class="quotelev1">&gt; -    setenv PATH ${PATH}:/opt/openmpi-g95/1.1.4/bin/
</span><br>
<span class="quotelev1">&gt; +if ( $?PATH ) then
</span><br>
<span class="quotelev1">&gt; +    setenv PATH ${PATH}:/opt/openmpi/1.1.4/bin/
</span><br>
<span class="quotelev1">&gt;  endif
</span><br>
<span class="quotelev1">&gt; -if (&quot;1LD_LIBRARY_PATH&quot;) then
</span><br>
<span class="quotelev1">&gt; -    if (&quot;&quot;) then
</span><br>
<span class="quotelev1">&gt; -        setenv LD_LIBRARY_PATH ${LD_LIBRARY_PATH}:/opt/openmpi- 
</span><br>
<span class="quotelev1">&gt; g95/1.1.4/lib
</span><br>
<span class="quotelev1">&gt; -    endif
</span><br>
<span class="quotelev1">&gt; +if ( $?LD_LIBRARY_PATH ) then
</span><br>
<span class="quotelev1">&gt; +        setenv LD_LIBRARY_PATH ${LD_LIBRARY_PATH}:/opt/openmpi/ 
</span><br>
<span class="quotelev1">&gt; 1.1.4/lib
</span><br>
<span class="quotelev1">&gt;  endif
</span><br>
<span class="quotelev1">&gt; -if (&quot;1MANPATH&quot;) then
</span><br>
<span class="quotelev1">&gt; -    if (&quot;&quot;) then
</span><br>
<span class="quotelev1">&gt; -        setenv MANPATH ${MANPATH}:/opt/openmpi-g95/1.1.4/man
</span><br>
<span class="quotelev1">&gt; -    endif
</span><br>
<span class="quotelev1">&gt; +if ( $?MANPATH ) then
</span><br>
<span class="quotelev1">&gt; +        setenv MANPATH ${MANPATH}:/opt/openmpi/1.1.4/man
</span><br>
<span class="quotelev1">&gt;  endif
</span><br>
<p>Most of this is due to bad escaping (i.e., lackthereof) in the spec  
<br>
file.  I'll fix that up shortly.  We're likely to do a 1.1.5 release  
<br>
in the not-distant future -- is it ok to wait for that, or do you  
<br>
need a new 1.1.4 SRPM?
<br>
<p>Thanks for bringing it to my attention!
<br>
<p><pre>
-- 
Jeff Squyres
Server Virtualization Business Unit
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2705.php">Brian Barrett: "Re: [OMPI users] ORTE errors on simple fortran program with 1.2b3"</a>
<li><strong>Previous message:</strong> <a href="2703.php">Steven A. DuChene: "[OMPI users] ORTE errors on simple fortran program with 1.2b3"</a>
<li><strong>In reply to:</strong> <a href="2687.php">Steven A. DuChene: "[OMPI users] where do the openmpi profile.d scripts get created?"</a>
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
