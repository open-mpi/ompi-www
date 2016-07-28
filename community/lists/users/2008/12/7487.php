<?
$subject_val = "Re: [OMPI users] collective algorithms";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 10 00:05:23 2008" -->
<!-- isoreceived="20081210050523" -->
<!-- sent="Wed, 10 Dec 2008 11:05:18 +0600" -->
<!-- isosent="20081210050518" -->
<!-- name="&#237;&#193;&#203;&#211;&#201;&#205; &#254;&#213;&#211;&#207;&#215;&#204;&#209;&#206;&#207;&#215;" -->
<!-- email="chmaxx_at_[hidden]" -->
<!-- subject="Re: [OMPI users] collective algorithms" -->
<!-- id="6750442a0812092105x31e9a248o4ea7b38b143c3cec_at_mail.gmail.com" -->
<!-- charset="KOI8-R" -->
<!-- inreplyto="0E76241D-C5E2-4091-B6D4-FFB3C88253C0_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] collective algorithms<br>
<strong>From:</strong> &#237;&#193;&#203;&#211;&#201;&#205; &#254;&#213;&#211;&#207;&#215;&#204;&#209;&#206;&#207;&#215; (<em>chmaxx_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-12-10 00:05:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7488.php">Sangamesh B: "Re: [OMPI users] Problem with feupdateenv"</a>
<li><strong>Previous message:</strong> <a href="7486.php">Brock Palen: "[OMPI users] Multicast?"</a>
<li><strong>In reply to:</strong> <a href="7437.php">Jeff Squyres: "Re: [OMPI users] collective algorithms"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7493.php">Jeff Squyres: "Re: [OMPI users] collective algorithms"</a>
<li><strong>Reply:</strong> <a href="7493.php">Jeff Squyres: "Re: [OMPI users] collective algorithms"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello! I appreciate your help. I received a library of my algorithm's. But I
<br>
don't know  how to use it.
<br>
<p>2008/12/6 Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
<br>
<p><span class="quotelev1">&gt; On Dec 6, 2008, at 10:32 AM, &#237;&#193;&#203;&#211;&#201;&#205; &#254;&#213;&#211;&#207;&#215;&#204;&#209;&#206;&#207;&#215; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Hello. Thanks for your response. I'm  create a my module and component
</span><br>
<span class="quotelev2">&gt;&gt; into the coll. But when I execute autogen.sh, it's return ../../libtool:
</span><br>
<span class="quotelev2">&gt;&gt; line 847: X--tag=CC: command not found
</span><br>
<span class="quotelev2">&gt;&gt; ../../libtool: line 880: libtool: ignoring unknown tag : command not found
</span><br>
<span class="quotelev2">&gt;&gt; ../../libtool: line 847: X--mode=compile: command not found
</span><br>
<span class="quotelev2">&gt;&gt;  I have a libtool v 1.5.26. Can you get me a some guide about create
</span><br>
<span class="quotelev2">&gt;&gt; configure.m4.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You might want to upgrade your Libtool; Libtool 2.x has been stable for
</span><br>
<span class="quotelev1">&gt; quite some time now.  See the HACKING file in the top-level Open MPI
</span><br>
<span class="quotelev1">&gt; directory for how to upgrade your GNU Auto/Libtools.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If upgrading your Auto tools doesn't work, let's move this conversation to
</span><br>
<span class="quotelev1">&gt; the devel list and send all relevant information (e.g., your configure.m4,
</span><br>
<span class="quotelev1">&gt; autogen.sh output, etc.), and we'll diagnose from there.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Good example configure.m4 files can be found throughout the OMPI code base;
</span><br>
<span class="quotelev1">&gt; do a &quot;find . -name configure.m4&quot; from the top-level dir and you'll see all
</span><br>
<span class="quotelev1">&gt; of them.  A relatively simple one to template from is
</span><br>
<span class="quotelev1">&gt; ompi/mca/btl/tcp/configure.m4 (it only has one test in it, but you can see
</span><br>
<span class="quotelev1">&gt; that you're required to define an M4 macro named
</span><br>
<span class="quotelev1">&gt; MCA_coll_&lt;your_component_name&gt;_CONFIG).  Just make sure to
</span><br>
<span class="quotelev1">&gt; s/btl_tcp/coll_&lt;your component name&gt;/ in your configure.m4.  Keep in mind
</span><br>
<span class="quotelev1">&gt; that per my first mail, you may not need a configure.m4 -- you only need
</span><br>
<span class="quotelev1">&gt; configure.m4 if you need configure to figure out if your component can build
</span><br>
<span class="quotelev1">&gt; (e.g., if you need some specific libraries or header files that aren't
</span><br>
<span class="quotelev1">&gt; generally universally installed on POSIX-like operating systems, such as
</span><br>
<span class="quotelev1">&gt; support for specific network libraries/hardware like MX, OpenFabrics, etc.).
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
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-7487/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7488.php">Sangamesh B: "Re: [OMPI users] Problem with feupdateenv"</a>
<li><strong>Previous message:</strong> <a href="7486.php">Brock Palen: "[OMPI users] Multicast?"</a>
<li><strong>In reply to:</strong> <a href="7437.php">Jeff Squyres: "Re: [OMPI users] collective algorithms"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7493.php">Jeff Squyres: "Re: [OMPI users] collective algorithms"</a>
<li><strong>Reply:</strong> <a href="7493.php">Jeff Squyres: "Re: [OMPI users] collective algorithms"</a>
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
