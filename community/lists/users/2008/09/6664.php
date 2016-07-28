<?
$subject_val = "Re: [OMPI users] conflict among differenv MPIs";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 22 13:33:08 2008" -->
<!-- isoreceived="20080922173308" -->
<!-- sent="Mon, 22 Sep 2008 13:33:00 -0400" -->
<!-- isosent="20080922173300" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] conflict among differenv MPIs" -->
<!-- id="71F4C083-334F-482E-9151-434DD750AEDD_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="126452.85484.qm_at_web34802.mail.mud.yahoo.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] conflict among differenv MPIs<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-09-22 13:33:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6665.php">Shafagh Jafer: "Re: [OMPI users] conflict among differenv MPIs"</a>
<li><strong>Previous message:</strong> <a href="6663.php">Gus Correa: "Re: [OMPI users] Configure and Build ok, but mpi module not recognized?"</a>
<li><strong>In reply to:</strong> <a href="6662.php">Shafagh Jafer: "Re: [OMPI users] conflict among differenv MPIs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6665.php">Shafagh Jafer: "Re: [OMPI users] conflict among differenv MPIs"</a>
<li><strong>Reply:</strong> <a href="6665.php">Shafagh Jafer: "Re: [OMPI users] conflict among differenv MPIs"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sep 22, 2008, at 1:24 PM, Shafagh Jafer wrote:
<br>
<p><span class="quotelev1">&gt; I am confused now...should I use &quot;/openmpi/mpic++ -E&quot;  or &quot;/openmpi/ 
</span><br>
<span class="quotelev1">&gt; mpic++&quot; to compile my entire code??
</span><br>
<p>mpic++.  I was showing you the -E functionality so that you could  
<br>
determine whether it really is picking up the wrong mpi.h or not.
<br>
<p><p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --- On Mon, 9/22/08, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; From: Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] conflict among differenv MPIs
</span><br>
<span class="quotelev1">&gt; To: &quot;Open MPI Users&quot; &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Date: Monday, September 22, 2008, 6:12 AM
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sep 22, 2008, at 8:48 AM, Robert Kubrick wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Recompile your own version of openmpi in a local directory, set your
</span><br>
<span class="quotelev2">&gt; &gt; PATH to your local openmpi install.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; export PATH=/my/openmpi/install/include:/usr/local/include
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; mpicxx -show
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpicxx --showme should show you the exact command that Open MPI's
</span><br>
<span class="quotelev1">&gt; wrapper compiler is using to compile your application.  There should
</span><br>
<span class="quotelev1">&gt; already be an explicit -I there for where OMPI's mpi.h resides.  If
</span><br>
<span class="quotelev1">&gt; that's the case, the compiler should look there *first* for mpi.h,
</span><br>
<span class="quotelev1">&gt; not /usr/local/include.  Consider following example:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - I created include-test.c which just does an &quot;#include
</span><br>
<span class="quotelev1">&gt; &lt;stdio.h&gt;&quot;.
</span><br>
<span class="quotelev1">&gt; - If I run this through the preprocessor, you can see that it's
</span><br>
<span class="quotelev1">&gt; getting /usr/include/stdio.h:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [6:09] svbu-mpi:~/tmp % cat include-test.c
</span><br>
<span class="quotelev1">&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev1">&gt; [6:09] svbu-mpi:~/tmp % gcc -E include-test.c | head
</span><br>
<span class="quotelev1">&gt; # 1 &quot;include-test.c&quot;
</span><br>
<span class="quotelev1">&gt; # 1 &quot;&lt;built-in&gt;&quot;
</span><br>
<span class="quotelev1">&gt; # 1 &quot;&lt;command line&gt;&quot;
</span><br>
<span class="quotelev1">&gt; # 1 &quot;include-test.c&quot;
</span><br>
<span class="quotelev1">&gt; # 1 &quot;/usr/include/stdio.h&quot; 1 3 4
</span><br>
<span class="quotelev1">&gt; # 28 &quot;/usr/include/stdio.h&quot; 3 4
</span><br>
<span class="quotelev1">&gt; # 1 &quot;/usr/include/features.h&quot; 1 3 4
</span><br>
<span class="quotelev1">&gt; # 319 &quot;/usr/include/features.h&quot; 3 4
</span><br>
<span class="quotelev1">&gt; # 1 &quot;/usr/include/sys/cdefs.h&quot; 1 3 4
</span><br>
<span class="quotelev1">&gt; # 320 &quot;/usr/include/features.h&quot; 2 3 4
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - But now I make my-include-dir/stdio.h with a single line in it
</span><br>
<span class="quotelev1">&gt; - Then I recompile with an explicit -I for that directory and you can
</span><br>
<span class="quotelev1">&gt; see that the compiler picks up that stdio.h, not /usr/include/stdio.h
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [6:09] svbu-mpi:~/tmp % cat my-include-dir/stdio.h
</span><br>
<span class="quotelev1">&gt; typedef int foo;
</span><br>
<span class="quotelev1">&gt; [6:09] svbu-mpi:~/tmp % gcc -E -Imy-include-dir include-test.c | head
</span><br>
<span class="quotelev1">&gt; # 1 &quot;include-test.c&quot;
</span><br>
<span class="quotelev1">&gt; # 1 &quot;&lt;built-in&gt;&quot;
</span><br>
<span class="quotelev1">&gt; # 1 &quot;&lt;command line&gt;&quot;
</span><br>
<span class="quotelev1">&gt; # 1 &quot;include-test.c&quot;
</span><br>
<span class="quotelev1">&gt; # 1 &quot;my-include-dir/stdio.h&quot; 1
</span><br>
<span class="quotelev1">&gt; typedef int foo;
</span><br>
<span class="quotelev1">&gt; # 2 &quot;include-test.c&quot; 2
</span><br>
<span class="quotelev1">&gt; [6:10] svbu-mpi:~/tmp %
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Are you sure that OMPI's mpicxx.h is picking up MPICH's mpi.h?  If so,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; how?  Did you run it through the preprocessor (perhaps similar to
</span><br>
<span class="quotelev1">&gt; above), or step through a debugger or something?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li><strong>Next message:</strong> <a href="6665.php">Shafagh Jafer: "Re: [OMPI users] conflict among differenv MPIs"</a>
<li><strong>Previous message:</strong> <a href="6663.php">Gus Correa: "Re: [OMPI users] Configure and Build ok, but mpi module not recognized?"</a>
<li><strong>In reply to:</strong> <a href="6662.php">Shafagh Jafer: "Re: [OMPI users] conflict among differenv MPIs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6665.php">Shafagh Jafer: "Re: [OMPI users] conflict among differenv MPIs"</a>
<li><strong>Reply:</strong> <a href="6665.php">Shafagh Jafer: "Re: [OMPI users] conflict among differenv MPIs"</a>
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
