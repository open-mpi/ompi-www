<?
$subject_val = "Re: [OMPI users] how to build with memchecker using valgrind, preferable linux distro install of valgrind?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 14 13:53:42 2016" -->
<!-- isoreceived="20160714175342" -->
<!-- sent="Thu, 14 Jul 2016 10:53:40 -0700" -->
<!-- isosent="20160714175340" -->
<!-- name="David A. Schneider" -->
<!-- email="davidsch_at_[hidden]" -->
<!-- subject="Re: [OMPI users] how to build with memchecker using valgrind, preferable linux distro install of valgrind?" -->
<!-- id="5787D1A4.2060206_at_slac.stanford.edu" -->
<!-- charset="utf-8" -->
<!-- inreplyto="9858D2DA-853E-47AB-8DB0-2FF60B439C0C_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] how to build with memchecker using valgrind, preferable linux distro install of valgrind?<br>
<strong>From:</strong> David A. Schneider (<em>davidsch_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-07-14 13:53:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29672.php">David A. Schneider: "[OMPI users] resolving warnings about OpenFabrics not being found"</a>
<li><strong>Previous message:</strong> <a href="29670.php">Jeff Squyres (jsquyres): "Re: [OMPI users] how to build with memchecker using valgrind, preferable linux distro install of valgrind?"</a>
<li><strong>In reply to:</strong> <a href="29670.php">Jeff Squyres (jsquyres): "Re: [OMPI users] how to build with memchecker using valgrind, preferable linux distro install of valgrind?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks! I built against a locally built valgrind and ran valgrind on a 
<br>
mpi program, there's a lot of noise, but hopefully it will be useful to 
<br>
mpi developers here.
<br>
<p>Related to building a mpi debug package, is there a simple example of 
<br>
using vampirtrace? I've
<br>
<p>* found documentation on running the vt compiler wrappers
<br>
* made a small example that generated a .otf, .thumb and set of 
<br>
.events.z files (the events file are one per rank?)
<br>
* found the vampirtrace pdf in the installation
<br>
<p>But it sounds like I am supposed to run a GUI, vamptrace, to interpret 
<br>
the results? This doesn't appear to be part of the open-mpi 
<br>
installation. How would I get this and see the communication in my 
<br>
simple example?
<br>
<p>I'm also wondering, since our developers are mostly going to use python 
<br>
with mpi4py, if I should make a build of mpi4py with the vt wrappers.
<br>
<p>best,
<br>
<p>David
<br>
<p>On 07/14/16 08:44, Jeff Squyres (jsquyres) wrote:
<br>
<span class="quotelev1">&gt; The key is that you need to specify --with-valgrind=valgrind_install_dir -- not the path to the valgrind executable.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Additionally, there's a valgrind.h that you'll need to have in that tree.  E.g., if you specify --with-valgrind=/opt/valgrind, then it expects to find /opt/valgrind/include/valgrind/valgrind.h in that tree.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If your system doesn't have that, you might need to look for a &quot;dev&quot; or &quot;devel&quot; kind of valgrind package to supplement your main &quot;valgrind&quot; package, and/or install Valgrind from source.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hope that helps.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Jul 14, 2016, at 11:32 AM, David A. Schneider &lt;davidsch_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I thought it would be a good idea to build a debugging version of openmpi 1.10.3. Following the instructions in the FAQ: <a href="https://www.open-mpi.org/faq/?category=debugging#memchecker_how">https://www.open-mpi.org/faq/?category=debugging#memchecker_how</a> &lt;<a href="https://email.slac.stanford.edu/owa/redir.aspx?REF=RP5_rOiQ9WZQgiVLWWUfJLansCsxNMkiYakBQ0zCua7x_z9A-6vTCAFodHRwczovL3d3dy5vcGVuLW1waS5vcmcvZmFxLz9jYXRlZ29yeT1kZWJ1Z2dpbmcjbWVtY2hlY2tlcl9ob3c">https://email.slac.stanford.edu/owa/redir.aspx?REF=RP5_rOiQ9WZQgiVLWWUfJLansCsxNMkiYakBQ0zCua7x_z9A-6vTCAFodHRwczovL3d3dy5vcGVuLW1waS5vcmcvZmFxLz9jYXRlZ29yeT1kZWJ1Z2dpbmcjbWVtY2hlY2tlcl9ob3c</a>.&gt; I went with
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; .configure &#226;&#128;&#148;with-verbs &#226;&#128;&#148;enable-debug &#226;&#128;&#148;enable-memchecker &#226;&#128;&#148;with-valgrind=/usr/bin/valgrind
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Since I discovered valgrind was already installed on our network (this is rhel7). However configure fails, and part of the error messages read
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; WARNING Expected file /usr/bin/include/valgrind/valgrind.h not found
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Is there a way to build openmpi to use the installation of valgrind on my system? I&#226;&#128;&#153;m not sure if/where the valgrind.h file is, I don&#226;&#128;&#153;t see it in /usr/include. If not, I will build against my own build of valgrind, but I run into similiar error messages - the auto tools script is not finding the headers my valgrind install - I've tried giving a full path to valgrind, the directory I used for PREFIX when I installed valgrind, there must be some assumptions about environment variables I need to have set to get the openmpi install script to work?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Reading through a page on valgrind: <a href="http://valgrind.org/docs/manual/mc-manual.html#mc-manual.mpiwrap">http://valgrind.org/docs/manual/mc-manual.html#mc-manual.mpiwrap</a> &lt;<a href="https://email.slac.stanford.edu/owa/redir.aspx?REF=RUoQIaKZhwLZN3KFa0DpMOj3B1mLOQzP7xrqLqeC7obx_z9A-6vTCAFodHRwOi8vdmFsZ3JpbmQub3JnL2RvY3MvbWFudWFsL21jLW1hbnVhbC5odG1sI21jLW1hbnVhbC5tcGl3cmFw">https://email.slac.stanford.edu/owa/redir.aspx?REF=RUoQIaKZhwLZN3KFa0DpMOj3B1mLOQzP7xrqLqeC7obx_z9A-6vTCAFodHRwOi8vdmFsZ3JpbmQub3JnL2RvY3MvbWFudWFsL21jLW1hbnVhbC5odG1sI21jLW1hbnVhbC5tcGl3cmFw</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I found instructions to the effect of how to wrap valgrind around an existing open-mpi install. Does any one know which is better? That is, what I'm trying, to build open-mpi based on a valgrind install, or to install valgrind based on a open-mpi install? Doing both looks like a circular dependency.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Best,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; David
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/07/29668.php">http://www.open-mpi.org/community/lists/users/2016/07/29668.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29672.php">David A. Schneider: "[OMPI users] resolving warnings about OpenFabrics not being found"</a>
<li><strong>Previous message:</strong> <a href="29670.php">Jeff Squyres (jsquyres): "Re: [OMPI users] how to build with memchecker using valgrind, preferable linux distro install of valgrind?"</a>
<li><strong>In reply to:</strong> <a href="29670.php">Jeff Squyres (jsquyres): "Re: [OMPI users] how to build with memchecker using valgrind, preferable linux distro install of valgrind?"</a>
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
