<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Jul 10 07:39:10 2007" -->
<!-- isoreceived="20070710113910" -->
<!-- sent="Tue, 10 Jul 2007 07:39:00 -0400" -->
<!-- isosent="20070710113900" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Multi-environment builds" -->
<!-- id="C17FDCFC-22C1-4B89-AD9D-9359220B2585_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="Pine.LNX.4.64.0707101144110.1196_at_kenzo.iwr.uni-heidelberg.de" -->
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
<strong>Date:</strong> 2007-07-10 07:39:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1827.php">Bogdan Costescu: "Re: [OMPI devel] Multi-environment builds"</a>
<li><strong>Previous message:</strong> <a href="1825.php">Ralf Wildenhues: "Re: [OMPI devel] Multi-environment builds"</a>
<li><strong>In reply to:</strong> <a href="1823.php">Bogdan Costescu: "Re: [OMPI devel] Multi-environment builds"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1827.php">Bogdan Costescu: "Re: [OMPI devel] Multi-environment builds"</a>
<li><strong>Reply:</strong> <a href="1827.php">Bogdan Costescu: "Re: [OMPI devel] Multi-environment builds"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jul 10, 2007, at 6:07 AM, Bogdan Costescu wrote:
<br>
<p><span class="quotelev2">&gt;&gt; For example, I can readily find machines that are running TM, but
</span><br>
<span class="quotelev2">&gt;&gt; also have LSF and SLURM libraries installed (although those
</span><br>
<span class="quotelev2">&gt;&gt; environments are not &quot;active&quot; - the libraries in some cases are old
</span><br>
<span class="quotelev2">&gt;&gt; and stale, usually present because either someone wanted to look at
</span><br>
<span class="quotelev2">&gt;&gt; them or represent an old installation).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Whatever the outcome of this discussion is, please keep in mind that
</span><br>
<span class="quotelev1">&gt; this represents an exception rather than the rule. So the common cases
</span><br>
<span class="quotelev1">&gt; of no batch environment or one batch environment installed should work
</span><br>
<span class="quotelev1">&gt; as effortless as possible. Furthermore, keep in mind that there are
</span><br>
<span class="quotelev1">&gt; lots of people who don't compile themselves Open MPI, but rely on
</span><br>
<span class="quotelev1">&gt; packages compiled by others (Linux distributions, most likely) - so
</span><br>
<span class="quotelev1">&gt; don't make life harder for those who produce these packages.
</span><br>
<p>FWIW, this is exactly the reason that we have the &quot;auto as much as  
<br>
possible&quot; behavior today; back in LAM/MPI, we had the problem that  
<br>
[many] users would say &quot;I built LAM, but it doesn't support ABC, even  
<br>
though your manual says that it does!  LAM's a piece of junk!&quot;  The  
<br>
sad fact is that most people assume that &quot;./configure &amp;&amp; make  
<br>
install&quot; will do all the Right magic for their system; efforts at  
<br>
education seemed to fail.  So we took the path of least resistance  
<br>
and assumed that if we can find it on your system, we should use it.   
<br>
Specifically: it was more of a support issue than anything else.
<br>
<p><span class="quotelev2">&gt;&gt; 1. ... we would only build support for those environments that the
</span><br>
<span class="quotelev2">&gt;&gt; builder specifies, and error out of the build process if multiple
</span><br>
<span class="quotelev2">&gt;&gt; conflicting environments are specified.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I think that Ralf's suggestion (auto unless forced) is better, as it
</span><br>
<span class="quotelev1">&gt; allows:
</span><br>
<span class="quotelev1">&gt; - a better chance of finding the environments for people who don't
</span><br>
<span class="quotelev1">&gt; have too much experience with building Open MPI or hate to RTFM
</span><br>
<span class="quotelev1">&gt; - control over what is built or not for people who know what they
</span><br>
<span class="quotelev1">&gt; are doing
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This raises the issue of what to do with rsh, but I think we can
</span><br>
<span class="quotelev2">&gt;&gt; handle that one by simply building it wherever possible.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I've been meaning to ask this for some time: is it possible to get rid
</span><br>
<span class="quotelev1">&gt; of rsh support when building/running in an environment where rsh is
</span><br>
<span class="quotelev1">&gt; not used (like a TM-based one) ? I'm not trying to achieve security by
</span><br>
<span class="quotelev1">&gt; doing this (after all, a user can build a separate copy of Open MPI
</span><br>
<span class="quotelev1">&gt; with rsh support), but just to make sure that the programs that I
</span><br>
<span class="quotelev1">&gt; build are either using the &quot;blessed&quot; start-up mechanism or error out.
</span><br>
<p>Do either of these work for you?
<br>
<p>1. Use the --enable-mca-no-build option as I discussed in a mail a  
<br>
few minutes ago.
<br>
2. Remove the &quot;mca_pls_rsh.*&quot; files in $prefix/lib/openmpi.
<br>
<p><span class="quotelev2">&gt;&gt; 2. We could laboriously go through all the components and ensure  
</span><br>
<span class="quotelev2">&gt;&gt; that they
</span><br>
<span class="quotelev2">&gt;&gt; check in their selection logic to see if that environment is active.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I might be missing something in the design of batch systems or
</span><br>
<span class="quotelev1">&gt; software in general, but how do you decide that an environment is
</span><br>
<span class="quotelev1">&gt; active or not ?
</span><br>
<p>Most batch systems today set a sentinel environment variable that we  
<br>
check for.
<br>
<p><span class="quotelev1">&gt; Can a library check if it's being used in a program ?
</span><br>
<span class="quotelev1">&gt; Or if that program actually runs ? And if a configuration file exists,
</span><br>
<span class="quotelev1">&gt; does it mean that the environment is actually active ?
</span><br>
<p>We do not generally assume that the presence of a plugin means that  
<br>
that plugin can run in the current environment.  I thought that all  
<br>
framework selection logic was adapted to this philosophy, but  
<br>
apparently Ralph is indicating that some do not.  :-)
<br>
<p><span class="quotelev1">&gt; How to deal
</span><br>
<span class="quotelev1">&gt; with the case where there are several versions of the same batch
</span><br>
<span class="quotelev1">&gt; system installed, all using the same configuration files and therefore
</span><br>
<span class="quotelev1">&gt; being ready to run ?
</span><br>
<p>We assume that Open MPI was built compiling/linking against the Right  
<br>
version.  There's not much else we can do if you build against the  
<br>
Wrong version.
<br>
<p><span class="quotelev1">&gt; And how about the case where there is a machine
</span><br>
<span class="quotelev1">&gt; reserved for compilations, where libraries are made available but
</span><br>
<span class="quotelev1">&gt; there is no batch system active ?
</span><br>
<p>That's what the compile-time vs. run-time detection and selection is  
<br>
supposed to be for.  The presence of an OMPI component at run-time is  
<br>
not supposed to mean that it can run; it's supposed to be queried and  
<br>
the component can do whatever checks it wants to see if it is  
<br>
supposed to run, and then report &quot;Yes, I can run&quot; / &quot;No, I cannot  
<br>
run&quot; back to Open MPI.
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
<li><strong>Next message:</strong> <a href="1827.php">Bogdan Costescu: "Re: [OMPI devel] Multi-environment builds"</a>
<li><strong>Previous message:</strong> <a href="1825.php">Ralf Wildenhues: "Re: [OMPI devel] Multi-environment builds"</a>
<li><strong>In reply to:</strong> <a href="1823.php">Bogdan Costescu: "Re: [OMPI devel] Multi-environment builds"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1827.php">Bogdan Costescu: "Re: [OMPI devel] Multi-environment builds"</a>
<li><strong>Reply:</strong> <a href="1827.php">Bogdan Costescu: "Re: [OMPI devel] Multi-environment builds"</a>
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
