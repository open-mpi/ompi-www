<?
$subject_val = "Re: [OMPI users] how to build with memchecker using valgrind, preferable linux distro install of valgrind?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 14 11:44:27 2016" -->
<!-- isoreceived="20160714154427" -->
<!-- sent="Thu, 14 Jul 2016 15:44:24 +0000" -->
<!-- isosent="20160714154424" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] how to build with memchecker using valgrind, preferable linux distro install of valgrind?" -->
<!-- id="9858D2DA-853E-47AB-8DB0-2FF60B439C0C_at_cisco.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="5787B095.8020501_at_slac.stanford.edu" -->
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
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-07-14 11:44:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29671.php">David A. Schneider: "Re: [OMPI users] how to build with memchecker using valgrind, preferable linux distro install of valgrind?"</a>
<li><strong>Previous message:</strong> <a href="29669.php">Gus Correa: "Re: [OMPI users] how to build with memchecker using valgrind, preferable linux distro install of valgrind?"</a>
<li><strong>In reply to:</strong> <a href="29668.php">David A. Schneider: "[OMPI users] how to build with memchecker using valgrind, preferable linux distro install of valgrind?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29671.php">David A. Schneider: "Re: [OMPI users] how to build with memchecker using valgrind, preferable linux distro install of valgrind?"</a>
<li><strong>Reply:</strong> <a href="29671.php">David A. Schneider: "Re: [OMPI users] how to build with memchecker using valgrind, preferable linux distro install of valgrind?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The key is that you need to specify --with-valgrind=valgrind_install_dir -- not the path to the valgrind executable.
<br>

<br>
Additionally, there's a valgrind.h that you'll need to have in that tree.  E.g., if you specify --with-valgrind=/opt/valgrind, then it expects to find /opt/valgrind/include/valgrind/valgrind.h in that tree.
<br>

<br>
If your system doesn't have that, you might need to look for a &quot;dev&quot; or &quot;devel&quot; kind of valgrind package to supplement your main &quot;valgrind&quot; package, and/or install Valgrind from source.
<br>

<br>
Hope that helps.
<br>

<br>

<br>
<span class="quotelev1">&gt; On Jul 14, 2016, at 11:32 AM, David A. Schneider &lt;davidsch_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I thought it would be a good idea to build a debugging version of openmpi 1.10.3. Following the instructions in the FAQ: <a href="https://www.open-mpi.org/faq/?category=debugging#memchecker_how">https://www.open-mpi.org/faq/?category=debugging#memchecker_how</a> &lt;<a href="https://email.slac.stanford.edu/owa/redir.aspx?REF=RP5_rOiQ9WZQgiVLWWUfJLansCsxNMkiYakBQ0zCua7x_z9A-6vTCAFodHRwczovL3d3dy5vcGVuLW1waS5vcmcvZmFxLz9jYXRlZ29yeT1kZWJ1Z2dpbmcjbWVtY2hlY2tlcl9ob3c">https://email.slac.stanford.edu/owa/redir.aspx?REF=RP5_rOiQ9WZQgiVLWWUfJLansCsxNMkiYakBQ0zCua7x_z9A-6vTCAFodHRwczovL3d3dy5vcGVuLW1waS5vcmcvZmFxLz9jYXRlZ29yeT1kZWJ1Z2dpbmcjbWVtY2hlY2tlcl9ob3c</a>.&gt; I went with
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; .configure &#226;&#128;&#148;with-verbs &#226;&#128;&#148;enable-debug &#226;&#128;&#148;enable-memchecker &#226;&#128;&#148;with-valgrind=/usr/bin/valgrind
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Since I discovered valgrind was already installed on our network (this is rhel7). However configure fails, and part of the error messages read
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; WARNING Expected file /usr/bin/include/valgrind/valgrind.h not found
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is there a way to build openmpi to use the installation of valgrind on my system? I&#226;&#128;&#153;m not sure if/where the valgrind.h file is, I don&#226;&#128;&#153;t see it in /usr/include. If not, I will build against my own build of valgrind, but I run into similiar error messages - the auto tools script is not finding the headers my valgrind install - I've tried giving a full path to valgrind, the directory I used for PREFIX when I installed valgrind, there must be some assumptions about environment variables I need to have set to get the openmpi install script to work?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Reading through a page on valgrind: <a href="http://valgrind.org/docs/manual/mc-manual.html#mc-manual.mpiwrap">http://valgrind.org/docs/manual/mc-manual.html#mc-manual.mpiwrap</a> &lt;<a href="https://email.slac.stanford.edu/owa/redir.aspx?REF=RUoQIaKZhwLZN3KFa0DpMOj3B1mLOQzP7xrqLqeC7obx_z9A-6vTCAFodHRwOi8vdmFsZ3JpbmQub3JnL2RvY3MvbWFudWFsL21jLW1hbnVhbC5odG1sI21jLW1hbnVhbC5tcGl3cmFw">https://email.slac.stanford.edu/owa/redir.aspx?REF=RUoQIaKZhwLZN3KFa0DpMOj3B1mLOQzP7xrqLqeC7obx_z9A-6vTCAFodHRwOi8vdmFsZ3JpbmQub3JnL2RvY3MvbWFudWFsL21jLW1hbnVhbC5odG1sI21jLW1hbnVhbC5tcGl3cmFw</a>&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I found instructions to the effect of how to wrap valgrind around an existing open-mpi install. Does any one know which is better? That is, what I'm trying, to build open-mpi based on a valgrind install, or to install valgrind based on a open-mpi install? Doing both looks like a circular dependency.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Best,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; David
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/07/29668.php">http://www.open-mpi.org/community/lists/users/2016/07/29668.php</a>
</span><br>

<br>

<br>
-- 
<br>
Jeff Squyres
<br>
jsquyres_at_[hidden]
<br>
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
<br>

<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29671.php">David A. Schneider: "Re: [OMPI users] how to build with memchecker using valgrind, preferable linux distro install of valgrind?"</a>
<li><strong>Previous message:</strong> <a href="29669.php">Gus Correa: "Re: [OMPI users] how to build with memchecker using valgrind, preferable linux distro install of valgrind?"</a>
<li><strong>In reply to:</strong> <a href="29668.php">David A. Schneider: "[OMPI users] how to build with memchecker using valgrind, preferable linux distro install of valgrind?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29671.php">David A. Schneider: "Re: [OMPI users] how to build with memchecker using valgrind, preferable linux distro install of valgrind?"</a>
<li><strong>Reply:</strong> <a href="29671.php">David A. Schneider: "Re: [OMPI users] how to build with memchecker using valgrind, preferable linux distro install of valgrind?"</a>
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
