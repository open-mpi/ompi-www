<?
$subject_val = "Re: [OMPI users] Compilation errors: Unexpected EOF while looking for matching `'' on 1.4.5";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar  9 10:09:01 2012" -->
<!-- isoreceived="20120309150901" -->
<!-- sent="Fri, 9 Mar 2012 10:08:57 -0500" -->
<!-- isosent="20120309150857" -->
<!-- name="Jeffrey Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Compilation errors: Unexpected EOF while looking for matching `'' on 1.4.5" -->
<!-- id="2F281670-F984-4EB7-B514-50745B613280_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4F5A1C1E.5080403_at_phys.lsu.edu" -->
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
<strong>From:</strong> Jeffrey Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-03-09 10:08:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18724.php">Robert Collyer: "Re: [OMPI users] Compilation errors: Unexpected EOF while looking for matching `'' on 1.4.5"</a>
<li><strong>Previous message:</strong> <a href="18722.php">Robert Collyer: "Re: [OMPI users] Compilation errors: Unexpected EOF while looking for matching `'' on 1.4.5"</a>
<li><strong>In reply to:</strong> <a href="18722.php">Robert Collyer: "Re: [OMPI users] Compilation errors: Unexpected EOF while looking for matching `'' on 1.4.5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18724.php">Robert Collyer: "Re: [OMPI users] Compilation errors: Unexpected EOF while looking for matching `'' on 1.4.5"</a>
<li><strong>Reply:</strong> <a href="18724.php">Robert Collyer: "Re: [OMPI users] Compilation errors: Unexpected EOF while looking for matching `'' on 1.4.5"</a>
<li><strong>Reply:</strong> <a href="18725.php">Robert Collyer: "Re: [OMPI users] Compilation errors: Unexpected EOF while looking for matching `'' on 1.4.5"</a>
<li><strong>Reply:</strong> <a href="18729.php">Robert Collyer: "Re: [OMPI users] Compilation errors: Unexpected EOF while looking for matching `'' on 1.4.5"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Is the error reproducible with Open MPI 1.5.5rc3?
<br>
<p><p>On Mar 9, 2012, at 10:05 AM, Robert Collyer wrote:
<br>
<p><span class="quotelev1">&gt; My apologies for not including that, it was on linux, specifically Fedora Core 9.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 3/9/12 8:32 AM, Jeffrey Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt; I am unable to replicate this problem on both OS X and Linux using the commands you provided.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; What OS are you using?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Mar 8, 2012, at 10:27 PM, Robert Collyer wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The libtool that is constructed for the configuration I'm using (below) has bug when it is constructing compiler_lib_search_path in both the CXX and FC sections, as follows
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; compiler_lib_search_path=&quot;-L/lib -L/usr/lib -L/usr/local/lib' ...&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; where the ellipses is just more directories. The error is the extra ' placed after /usr/local/lib. I am not sure where it creeps in as I am unfamiliar with m4.  Changing both instances allows compilation to continue. Additionally, the extra ' is present in both instances of compiler_lib_search_dir, also.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Sincerely,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Rob Collyer
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; P.S. My configuration, to be run from the shell using sh:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; export LDFLAGS=&quot;-L/opt/lib -L/opt/lib -L/usr/lib -L/usr/local/lib&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; export CPPFLAGS=&quot;-I/opt/include -I/usr/include -I/usr/local/include&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; export FCFLAGS=&quot;-I/opt/include -I/usr/include -I/usr/local/include&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ./configure --prefix=`pwd` CC=/opt/bin/gcc CXX=/opt/bin/g++ FC=/opt/bin/gfortran F77=/opt/bin/gfortran
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
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
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18724.php">Robert Collyer: "Re: [OMPI users] Compilation errors: Unexpected EOF while looking for matching `'' on 1.4.5"</a>
<li><strong>Previous message:</strong> <a href="18722.php">Robert Collyer: "Re: [OMPI users] Compilation errors: Unexpected EOF while looking for matching `'' on 1.4.5"</a>
<li><strong>In reply to:</strong> <a href="18722.php">Robert Collyer: "Re: [OMPI users] Compilation errors: Unexpected EOF while looking for matching `'' on 1.4.5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18724.php">Robert Collyer: "Re: [OMPI users] Compilation errors: Unexpected EOF while looking for matching `'' on 1.4.5"</a>
<li><strong>Reply:</strong> <a href="18724.php">Robert Collyer: "Re: [OMPI users] Compilation errors: Unexpected EOF while looking for matching `'' on 1.4.5"</a>
<li><strong>Reply:</strong> <a href="18725.php">Robert Collyer: "Re: [OMPI users] Compilation errors: Unexpected EOF while looking for matching `'' on 1.4.5"</a>
<li><strong>Reply:</strong> <a href="18729.php">Robert Collyer: "Re: [OMPI users] Compilation errors: Unexpected EOF while looking for matching `'' on 1.4.5"</a>
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
