<?
$subject_val = "Re: [OMPI users] conflict among differenv MPIs";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 22 13:24:46 2008" -->
<!-- isoreceived="20080922172446" -->
<!-- sent="Mon, 22 Sep 2008 10:24:42 -0700 (PDT)" -->
<!-- isosent="20080922172442" -->
<!-- name="Shafagh Jafer" -->
<!-- email="barfy27_at_[hidden]" -->
<!-- subject="Re: [OMPI users] conflict among differenv MPIs" -->
<!-- id="126452.85484.qm_at_web34802.mail.mud.yahoo.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="EB53D3E1-94AA-4A03-B9B8-4FAB8B503EA3_at_cisco.com" -->
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
<strong>From:</strong> Shafagh Jafer (<em>barfy27_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-09-22 13:24:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6663.php">Gus Correa: "Re: [OMPI users] Configure and Build ok, but mpi module not recognized?"</a>
<li><strong>Previous message:</strong> <a href="6661.php">Josh Hursey: "Re: [OMPI users] Checkpointing a restarted app fails"</a>
<li><strong>In reply to:</strong> <a href="6651.php">Jeff Squyres: "Re: [OMPI users] conflict among differenv MPIs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6664.php">Jeff Squyres: "Re: [OMPI users] conflict among differenv MPIs"</a>
<li><strong>Reply:</strong> <a href="6664.php">Jeff Squyres: "Re: [OMPI users] conflict among differenv MPIs"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I am confused now...should I use &quot;/openmpi/mpic++ -E&quot;&#160; or &quot;/openmpi/mpic++&quot; to compile my entire code??
<br>
<p>--- On Mon, 9/22/08, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p>From: Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
<br>
Subject: Re: [OMPI users] conflict among differenv MPIs
<br>
To: &quot;Open MPI Users&quot; &lt;users_at_[hidden]&gt;
<br>
Date: Monday, September 22, 2008, 6:12 AM
<br>
<p>On Sep 22, 2008, at 8:48 AM, Robert Kubrick wrote:
<br>
<p><span class="quotelev1">&gt; Recompile your own version of openmpi in a local directory, set your  
</span><br>
<span class="quotelev1">&gt; PATH to your local openmpi install.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; export PATH=/my/openmpi/install/include:/usr/local/include
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpicxx -show
</span><br>
<p>mpicxx --showme should show you the exact command that Open MPI's  
<br>
wrapper compiler is using to compile your application.  There should  
<br>
already be an explicit -I there for where OMPI's mpi.h resides.  If  
<br>
that's the case, the compiler should look there *first* for mpi.h,  
<br>
not /usr/local/include.  Consider following example:
<br>
<p>- I created include-test.c which just does an &quot;#include
<br>
&lt;stdio.h&gt;&quot;.
<br>
- If I run this through the preprocessor, you can see that it's  
<br>
getting /usr/include/stdio.h:
<br>
<p>[6:09] svbu-mpi:~/tmp % cat include-test.c
<br>
#include &lt;stdio.h&gt;
<br>
[6:09] svbu-mpi:~/tmp % gcc -E include-test.c | head
<br>
# 1 &quot;include-test.c&quot;
<br>
# 1 &quot;&lt;built-in&gt;&quot;
<br>
# 1 &quot;&lt;command line&gt;&quot;
<br>
# 1 &quot;include-test.c&quot;
<br>
# 1 &quot;/usr/include/stdio.h&quot; 1 3 4
<br>
# 28 &quot;/usr/include/stdio.h&quot; 3 4
<br>
# 1 &quot;/usr/include/features.h&quot; 1 3 4
<br>
# 319 &quot;/usr/include/features.h&quot; 3 4
<br>
# 1 &quot;/usr/include/sys/cdefs.h&quot; 1 3 4
<br>
# 320 &quot;/usr/include/features.h&quot; 2 3 4
<br>
<p>- But now I make my-include-dir/stdio.h with a single line in it
<br>
- Then I recompile with an explicit -I for that directory and you can  
<br>
see that the compiler picks up that stdio.h, not /usr/include/stdio.h
<br>
<p>[6:09] svbu-mpi:~/tmp % cat my-include-dir/stdio.h
<br>
typedef int foo;
<br>
[6:09] svbu-mpi:~/tmp % gcc -E -Imy-include-dir include-test.c | head
<br>
# 1 &quot;include-test.c&quot;
<br>
# 1 &quot;&lt;built-in&gt;&quot;
<br>
# 1 &quot;&lt;command line&gt;&quot;
<br>
# 1 &quot;include-test.c&quot;
<br>
# 1 &quot;my-include-dir/stdio.h&quot; 1
<br>
typedef int foo;
<br>
# 2 &quot;include-test.c&quot; 2
<br>
[6:10] svbu-mpi:~/tmp %
<br>
<p>Are you sure that OMPI's mpicxx.h is picking up MPICH's mpi.h?  If so, 
<br>
<p>how?  Did you run it through the preprocessor (perhaps similar to  
<br>
above), or step through a debugger or something?
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
_______________________________________________
users mailing list
users_at_[hidden]
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-6662/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6663.php">Gus Correa: "Re: [OMPI users] Configure and Build ok, but mpi module not recognized?"</a>
<li><strong>Previous message:</strong> <a href="6661.php">Josh Hursey: "Re: [OMPI users] Checkpointing a restarted app fails"</a>
<li><strong>In reply to:</strong> <a href="6651.php">Jeff Squyres: "Re: [OMPI users] conflict among differenv MPIs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6664.php">Jeff Squyres: "Re: [OMPI users] conflict among differenv MPIs"</a>
<li><strong>Reply:</strong> <a href="6664.php">Jeff Squyres: "Re: [OMPI users] conflict among differenv MPIs"</a>
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
