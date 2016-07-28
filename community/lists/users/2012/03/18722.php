<?
$subject_val = "Re: [OMPI users] Compilation errors: Unexpected EOF while looking for matching `'' on 1.4.5";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar  9 10:05:12 2012" -->
<!-- isoreceived="20120309150512" -->
<!-- sent="Fri, 09 Mar 2012 10:05:02 -0500" -->
<!-- isosent="20120309150502" -->
<!-- name="Robert Collyer" -->
<!-- email="rcollyer_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Compilation errors: Unexpected EOF while looking for matching `'' on 1.4.5" -->
<!-- id="4F5A1C1E.5080403_at_phys.lsu.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="86BD6F62-087E-4728-9E04-A94BA81DF932_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Compilation errors: Unexpected EOF while looking for matching `'' on 1.4.5<br>
<strong>From:</strong> Robert Collyer (<em>rcollyer_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-03-09 10:05:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18723.php">Jeffrey Squyres: "Re: [OMPI users] Compilation errors: Unexpected EOF while looking for matching `'' on 1.4.5"</a>
<li><strong>Previous message:</strong> <a href="18721.php">Jeremy: "Re: [OMPI users] InfiniBand path migration not working"</a>
<li><strong>In reply to:</strong> <a href="18720.php">Jeffrey Squyres: "Re: [OMPI users] Compilation errors: Unexpected EOF while looking for matching `'' on 1.4.5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18723.php">Jeffrey Squyres: "Re: [OMPI users] Compilation errors: Unexpected EOF while looking for matching `'' on 1.4.5"</a>
<li><strong>Reply:</strong> <a href="18723.php">Jeffrey Squyres: "Re: [OMPI users] Compilation errors: Unexpected EOF while looking for matching `'' on 1.4.5"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
My apologies for not including that, it was on linux, specifically 
<br>
Fedora Core 9.
<br>
<p>On 3/9/12 8:32 AM, Jeffrey Squyres wrote:
<br>
<span class="quotelev1">&gt; I am unable to replicate this problem on both OS X and Linux using the commands you provided.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What OS are you using?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mar 8, 2012, at 10:27 PM, Robert Collyer wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The libtool that is constructed for the configuration I'm using (below) has bug when it is constructing compiler_lib_search_path in both the CXX and FC sections, as follows
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; compiler_lib_search_path=&quot;-L/lib -L/usr/lib -L/usr/local/lib' ...&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; where the ellipses is just more directories. The error is the extra ' placed after /usr/local/lib. I am not sure where it creeps in as I am unfamiliar with m4.  Changing both instances allows compilation to continue. Additionally, the extra ' is present in both instances of compiler_lib_search_dir, also.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Sincerely,
</span><br>
<span class="quotelev2">&gt;&gt; Rob Collyer
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; P.S. My configuration, to be run from the shell using sh:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; export LDFLAGS=&quot;-L/opt/lib -L/opt/lib -L/usr/lib -L/usr/local/lib&quot;
</span><br>
<span class="quotelev2">&gt;&gt; export CPPFLAGS=&quot;-I/opt/include -I/usr/include -I/usr/local/include&quot;
</span><br>
<span class="quotelev2">&gt;&gt; export FCFLAGS=&quot;-I/opt/include -I/usr/include -I/usr/local/include&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ./configure --prefix=`pwd` CC=/opt/bin/gcc CXX=/opt/bin/g++ FC=/opt/bin/gfortran F77=/opt/bin/gfortran
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18723.php">Jeffrey Squyres: "Re: [OMPI users] Compilation errors: Unexpected EOF while looking for matching `'' on 1.4.5"</a>
<li><strong>Previous message:</strong> <a href="18721.php">Jeremy: "Re: [OMPI users] InfiniBand path migration not working"</a>
<li><strong>In reply to:</strong> <a href="18720.php">Jeffrey Squyres: "Re: [OMPI users] Compilation errors: Unexpected EOF while looking for matching `'' on 1.4.5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18723.php">Jeffrey Squyres: "Re: [OMPI users] Compilation errors: Unexpected EOF while looking for matching `'' on 1.4.5"</a>
<li><strong>Reply:</strong> <a href="18723.php">Jeffrey Squyres: "Re: [OMPI users] Compilation errors: Unexpected EOF while looking for matching `'' on 1.4.5"</a>
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
