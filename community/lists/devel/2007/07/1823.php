<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Jul 10 06:07:36 2007" -->
<!-- isoreceived="20070710100736" -->
<!-- sent="Tue, 10 Jul 2007 12:07:30 +0200 (CEST)" -->
<!-- isosent="20070710100730" -->
<!-- name="Bogdan Costescu" -->
<!-- email="Bogdan.Costescu_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Multi-environment builds" -->
<!-- id="Pine.LNX.4.64.0707101144110.1196_at_kenzo.iwr.uni-heidelberg.de" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="C2B8422A.33F1%rhc_at_lanl.gov" -->
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
<strong>From:</strong> Bogdan Costescu (<em>Bogdan.Costescu_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-07-10 06:07:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1824.php">Jeff Squyres: "Re: [OMPI devel] Multi-environment builds"</a>
<li><strong>Previous message:</strong> <a href="1822.php">Ralf Wildenhues: "Re: [OMPI devel] Multi-environment builds"</a>
<li><strong>In reply to:</strong> <a href="1821.php">Ralph Castain: "[OMPI devel] Multi-environment builds"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1826.php">Jeff Squyres: "Re: [OMPI devel] Multi-environment builds"</a>
<li><strong>Reply:</strong> <a href="1826.php">Jeff Squyres: "Re: [OMPI devel] Multi-environment builds"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mon, 9 Jul 2007, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; For example, I can readily find machines that are running TM, but 
</span><br>
<span class="quotelev1">&gt; also have LSF and SLURM libraries installed (although those 
</span><br>
<span class="quotelev1">&gt; environments are not &quot;active&quot; - the libraries in some cases are old 
</span><br>
<span class="quotelev1">&gt; and stale, usually present because either someone wanted to look at 
</span><br>
<span class="quotelev1">&gt; them or represent an old installation).
</span><br>
<p>Whatever the outcome of this discussion is, please keep in mind that 
<br>
this represents an exception rather than the rule. So the common cases 
<br>
of no batch environment or one batch environment installed should work 
<br>
as effortless as possible. Furthermore, keep in mind that there are 
<br>
lots of people who don't compile themselves Open MPI, but rely on 
<br>
packages compiled by others (Linux distributions, most likely) - so 
<br>
don't make life harder for those who produce these packages.
<br>
<p><span class="quotelev1">&gt; 1. ... we would only build support for those environments that the 
</span><br>
<span class="quotelev1">&gt; builder specifies, and error out of the build process if multiple 
</span><br>
<span class="quotelev1">&gt; conflicting environments are specified.
</span><br>
<p>I think that Ralf's suggestion (auto unless forced) is better, as it 
<br>
allows:
<br>
- a better chance of finding the environments for people who don't 
<br>
have too much experience with building Open MPI or hate to RTFM
<br>
- control over what is built or not for people who know what they 
<br>
are doing
<br>
<p><span class="quotelev1">&gt; This raises the issue of what to do with rsh, but I think we can 
</span><br>
<span class="quotelev1">&gt; handle that one by simply building it wherever possible.
</span><br>
<p>I've been meaning to ask this for some time: is it possible to get rid 
<br>
of rsh support when building/running in an environment where rsh is 
<br>
not used (like a TM-based one) ? I'm not trying to achieve security by 
<br>
doing this (after all, a user can build a separate copy of Open MPI 
<br>
with rsh support), but just to make sure that the programs that I 
<br>
build are either using the &quot;blessed&quot; start-up mechanism or error out.
<br>
<p><span class="quotelev1">&gt; 2. We could laboriously go through all the components and ensure that they
</span><br>
<span class="quotelev1">&gt; check in their selection logic to see if that environment is active.
</span><br>
<p>I might be missing something in the design of batch systems or 
<br>
software in general, but how do you decide that an environment is 
<br>
active or not ? Can a library check if it's being used in a program ? 
<br>
Or if that program actually runs ? And if a configuration file exists, 
<br>
does it mean that the environment is actually active ? How to deal 
<br>
with the case where there are several versions of the same batch 
<br>
system installed, all using the same configuration files and therefore 
<br>
being ready to run ? And how about the case where there is a machine 
<br>
reserved for compilations, where libraries are made available but 
<br>
there is no batch system active ?
<br>
<p><pre>
-- 
Bogdan Costescu
IWR - Interdisziplinaeres Zentrum fuer Wissenschaftliches Rechnen
Universitaet Heidelberg, INF 368, D-69120 Heidelberg, GERMANY
Telephone: +49 6221 54 8869, Telefax: +49 6221 54 8868
E-mail: Bogdan.Costescu_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1824.php">Jeff Squyres: "Re: [OMPI devel] Multi-environment builds"</a>
<li><strong>Previous message:</strong> <a href="1822.php">Ralf Wildenhues: "Re: [OMPI devel] Multi-environment builds"</a>
<li><strong>In reply to:</strong> <a href="1821.php">Ralph Castain: "[OMPI devel] Multi-environment builds"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1826.php">Jeff Squyres: "Re: [OMPI devel] Multi-environment builds"</a>
<li><strong>Reply:</strong> <a href="1826.php">Jeff Squyres: "Re: [OMPI devel] Multi-environment builds"</a>
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
