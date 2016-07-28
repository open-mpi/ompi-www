<?
$subject_val = "Re: [OMPI users] openmpi java binding errors";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar 15 21:06:01 2013" -->
<!-- isoreceived="20130316010601" -->
<!-- sent="Fri, 15 Mar 2013 18:05:55 -0700" -->
<!-- isosent="20130316010555" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi java binding errors" -->
<!-- id="618F6D9E-9F88-47AD-B048-BD67EF99BF9F_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAJY_E12NjXwEzeiDUC7CxuKLGiN_Tzvq+_5KhXw5W7MSbgSGnw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] openmpi java binding errors<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-03-15 21:05:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21548.php">tmishima_at_[hidden]: "[OMPI users] modified hostfile does not work with openmpi1.7rc8"</a>
<li><strong>Previous message:</strong> <a href="21546.php">Huasha Zhao: "Re: [OMPI users] openmpi java binding errors"</a>
<li><strong>In reply to:</strong> <a href="21546.php">Huasha Zhao: "Re: [OMPI users] openmpi java binding errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21551.php">Jeff Squyres (jsquyres): "Re: [OMPI users] openmpi java binding errors"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It isn't libtool that you need - it is lt_dladvise. It's in a different package.
<br>
<p>On Mar 15, 2013, at 6:02 PM, Huasha Zhao &lt;creislerzhao_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I think I have it installed. when i type 'which libtool', the system responds '/usr/local/bin/libtool'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Fri, Mar 15, 2013 at 7:27 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; It isn't finding libtool's dladvise support - try installing the libtool-ltdl package
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Mar 13, 2013, at 7:59 PM, Huasha Zhao &lt;creislerzhao_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hi all,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I encountered an error when running openmpi Java applications (it works fine with c/c++ applications). The java code compiles successfully, but it crashed at runtime with:
</span><br>
<span class="quotelev2">&gt;&gt; NO LT_DLADVISE - CANNOT LOAD LIBOMPI
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; JAVA BINDINGS FAILED TO LOAD REQUIRED LIBRARIES
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I think it has to do with dynamically loading native libraries. Since I have no experiences with JNI, I would like to resort to the community to help solve the problem.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; This is how exactly I install openmpi (on a EC2 AMI linux instance). I use a nightly snapshot openmpi-1.9r28157.tar.gz
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; sudo ./configure --enable-mpi-java --prefix=/usr/local
</span><br>
<span class="quotelev2">&gt;&gt; sudo make all install
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I also set LD_LIBRARY_PATH to include &quot;/usr/local/lib&quot; which has &quot;libmpi.so&quot;.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Chris Zhao 
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
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Huasha Zhao 
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
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-21547/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21548.php">tmishima_at_[hidden]: "[OMPI users] modified hostfile does not work with openmpi1.7rc8"</a>
<li><strong>Previous message:</strong> <a href="21546.php">Huasha Zhao: "Re: [OMPI users] openmpi java binding errors"</a>
<li><strong>In reply to:</strong> <a href="21546.php">Huasha Zhao: "Re: [OMPI users] openmpi java binding errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21551.php">Jeff Squyres (jsquyres): "Re: [OMPI users] openmpi java binding errors"</a>
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
