<?
$subject_val = "Re: [OMPI users] OpenMPI portability problems: debug info isn't helpful";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Oct 18 08:46:58 2008" -->
<!-- isoreceived="20081018124658" -->
<!-- sent="Sat, 18 Oct 2008 08:46:52 -0400" -->
<!-- isosent="20081018124652" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI portability problems: debug info isn't helpful" -->
<!-- id="5425B578-434A-45EC-9137-721B2DBF4FA9_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="87r66gphhf.fsf_at_inbox.ru" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMPI portability problems: debug info isn't helpful<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-18 08:46:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7029.php">Jeff Squyres: "Re: [OMPI users] MPI_ERR_TRUNCATE"</a>
<li><strong>Previous message:</strong> <a href="7027.php">Jeff Squyres: "Re: [OMPI users] OPAL_PREFIX is not passed to remote node in pls_rsh_module.c"</a>
<li><strong>In reply to:</strong> <a href="7004.php">Aleksej Saushev: "Re: [OMPI users] OpenMPI portability problems: debug info isn't helpful"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Oct 16, 2008, at 1:39 PM, Aleksej Saushev wrote:
<br>
<p><span class="quotelev1">&gt; [asau.local:04648] opal_ifinit: ioctl(SIOCGIFFLAGS) failed with  
</span><br>
<span class="quotelev1">&gt; errno=6
</span><br>
<span class="quotelev1">&gt; [snip]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Why don't you use strerror(3) to print errno value explanation?
</span><br>
<p>I don't know; whoever wrote that just chose not to there.  Shrug.
<br>
<p><span class="quotelev2">&gt;&gt; From &lt;sys/errno.h&gt;:
</span><br>
<span class="quotelev1">&gt; #define	ENXIO		6		/* Device not configured */
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It seems that I have to debug network interface probing,
</span><br>
<span class="quotelev1">&gt; how should I use *_output subroutines so that they do print?
</span><br>
<p>opal_output(0, &quot;...printf-like stuff here...&quot;, ...printf varargs...);
<br>
<p>Should always output.  Stream 0 is our &quot;unconditional&quot; stream; it goes  
<br>
to stderr.  You'll see opal_output(0) output from mpirun and MPI apps;  
<br>
we usually close the stderr from orted's by default.
<br>
<p>Make sure that you re-build and re-install OMPI properly or your  
<br>
output won't show up.  You can either do a top-level &quot;make  
<br>
install&quot; (which might be lengthy, depending on the speed of your  
<br>
system(s), and especially if you're iteratively editing opal/util/ 
<br>
if.c), or you can do the following:
<br>
<p>cd top-ompi-src-dir
<br>
cd opal
<br>
make
<br>
make install-am
<br>
<p>If you built OMPI with shared libraries, that should be sufficient to  
<br>
recompile opal/util/if.c, rebuild libopen-pal.so, and re-install it.   
<br>
Or, if you *really* want to streamline, you can do something like this:
<br>
<p>cd top-ompi-src-dir
<br>
cd opal
<br>
cd util &amp;&amp; make &amp;&amp; cd .. &amp;&amp; make install-am
<br>
<p>And then repeat that last step as necessary (this is the kind of thing  
<br>
I do when I am editing a single .c file in one of OMPI's libs).
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
<li><strong>Next message:</strong> <a href="7029.php">Jeff Squyres: "Re: [OMPI users] MPI_ERR_TRUNCATE"</a>
<li><strong>Previous message:</strong> <a href="7027.php">Jeff Squyres: "Re: [OMPI users] OPAL_PREFIX is not passed to remote node in pls_rsh_module.c"</a>
<li><strong>In reply to:</strong> <a href="7004.php">Aleksej Saushev: "Re: [OMPI users] OpenMPI portability problems: debug info isn't helpful"</a>
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
