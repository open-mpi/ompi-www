<?
$subject_val = "[MTT users] Re: [MTT users] Re: &#180;&#240;&#184;&#180;: mtt";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 23 08:50:28 2009" -->
<!-- isoreceived="20090323125028" -->
<!-- sent="Mon, 23 Mar 2009 05:50:13 -0700" -->
<!-- isosent="20090323125013" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[MTT users] Re: [MTT users] Re: &amp;#180;&amp;#240;&amp;#184;&amp;#180;: mtt" -->
<!-- id="F7E44D16-3386-422A-B466-08CF091F2D57_at_cisco.com" -->
<!-- charset="GB2312" -->
<!-- inreplyto="4CC15B19-9069-4534-A94A-12917D3D0A7C_at_cisco.com" -->
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
<strong>Subject:</strong> [MTT users] Re: [MTT users] Re: &#180;&#240;&#184;&#180;: mtt<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-23 08:50:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-users/2009/04/0668.php">Rafael Folco: "[MTT users] MTT Error on SLES11"</a>
<li><strong>Previous message:</strong> <a href="0666.php">Jeff Squyres: "[MTT users] Re: &#180;&#240;&#184;&#180;: mtt"</a>
<li><strong>In reply to:</strong> <a href="0666.php">Jeff Squyres: "[MTT users] Re: &#180;&#240;&#184;&#180;: mtt"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I neglected to answer your question, sorry.
<br>
<p>The ompi-tests SVN repository is not a public repository.  It is used  
<br>
by the members of the Open MPI project for internal regression testing  
<br>
of Open MPI.  There's nothing really secret in that repository; it's a  
<br>
collection of publicly-available tests and benchmarks (as you can  
<br>
infer from the sample INI file).  However, we have never looked into  
<br>
the redistribution rights of these tests/benchmarks, so we don't make  
<br>
our personal collection available via a public SVN repository.
<br>
<p>We should probably make this point a little more clear in the sample  
<br>
INI file.
<br>
<p><p>On Mar 23, 2009, at 5:36 AM, Jeff Squyres (jsquyres) wrote:
<br>
<p><span class="quotelev1">&gt; You should really be asking these questions on the public mailing  
</span><br>
<span class="quotelev1">&gt; list.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Are you briefness_at_[hidden]?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mar 22, 2009, at 6:44 PM, JiYi wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hi Jeff!
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks for your quick response! The download and installation
</span><br>
<span class="quotelev2">&gt; &gt; process are ok.
</span><br>
<span class="quotelev2">&gt; &gt; But it failed when it came to section &quot;Test Get&quot;. The problem seems
</span><br>
<span class="quotelev2">&gt; &gt; that the authority is needed when logging in &quot;<a href="https://svn.open-mpi.org/svn/ompi-tests/">https://svn.open-mpi.org/svn/ompi-tests/</a>
</span><br>
<span class="quotelev2">&gt; &gt; &quot;. Would you please help me with that? Thanks a lot again!
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Best,Regards!
</span><br>
<span class="quotelev2">&gt; &gt; Jerry
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; &#183;&#162;&#188;&#254;&#200;&#203;: Jeff Squyres [mailto:jsquyres_at_[hidden]]
</span><br>
<span class="quotelev2">&gt; &gt; &#183;&#162;&#203;&#205;&#202;&#177;&#188;&#228;: 2009&#196;&#234;3&#212;&#194;20&#200;&#213; 18:51
</span><br>
<span class="quotelev2">&gt; &gt; &#202;&#213;&#188;&#254;&#200;&#203;: jerry_ji_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; &#214;&#247;&#204;&#226;: mtt
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Greetings Jerry.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; We just recently switched from one SVN hosting manager software to
</span><br>
<span class="quotelev2">&gt; &gt; another.  Just last night we discovered that in the conversion
</span><br>
<span class="quotelev2">&gt; &gt; process, we lost all of the anonymous/read-only privileges on our
</span><br>
<span class="quotelev2">&gt; &gt; SVN repositories.  I thought that I had fixed them all last night,
</span><br>
<span class="quotelev2">&gt; &gt; but I missed the MTT SVN repo.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks for the reminder!  Sorry for the confusion -- you should be
</span><br>
<span class="quotelev2">&gt; &gt; able to get to the MTT SVN repo now.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Please feel free to contact us on the mtt-users list with questions,
</span><br>
<span class="quotelev2">&gt; &gt; comments, etc.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Begin forwarded message:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; From: &quot;JiYi&quot; &lt;jerry_ji_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Date: March 20, 2009 1:10:39 AM EDT
</span><br>
<span class="quotelev2">&gt; &gt; To: &lt;vendor-request_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Subject: about mtt
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hi,Admin!
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; It's told that the anonymous can be access to download Mpi Testing
</span><br>
<span class="quotelev2">&gt; &gt; Tool(<a href="http://svn.open-mpi.org/svn/mtt/">http://svn.open-mpi.org/svn/mtt/</a>) by the web site. But it seems
</span><br>
<span class="quotelev2">&gt; &gt; that the user name and password are necessary. Would you please tell
</span><br>
<span class="quotelev2">&gt; &gt; me why and help me figure out this problem? Thanks a lot!
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; BestRegards!
</span><br>
<span class="quotelev2">&gt; &gt; Jerry
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt; &gt; Cisco Systems
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &lt;ATT6497019.txt&gt;
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
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-users/2009/04/0668.php">Rafael Folco: "[MTT users] MTT Error on SLES11"</a>
<li><strong>Previous message:</strong> <a href="0666.php">Jeff Squyres: "[MTT users] Re: &#180;&#240;&#184;&#180;: mtt"</a>
<li><strong>In reply to:</strong> <a href="0666.php">Jeff Squyres: "[MTT users] Re: &#180;&#240;&#184;&#180;: mtt"</a>
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
