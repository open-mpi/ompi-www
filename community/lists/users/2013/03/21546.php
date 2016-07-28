<?
$subject_val = "Re: [OMPI users] openmpi java binding errors";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar 15 21:02:12 2013" -->
<!-- isoreceived="20130316010212" -->
<!-- sent="Fri, 15 Mar 2013 18:02:08 -0700" -->
<!-- isosent="20130316010208" -->
<!-- name="Huasha Zhao" -->
<!-- email="creislerzhao_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi java binding errors" -->
<!-- id="CAJY_E12NjXwEzeiDUC7CxuKLGiN_Tzvq+_5KhXw5W7MSbgSGnw_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="47EF274C-0081-40E1-BDC9-220043EAF460_at_open-mpi.org" -->
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
<strong>From:</strong> Huasha Zhao (<em>creislerzhao_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-03-15 21:02:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21547.php">Ralph Castain: "Re: [OMPI users] openmpi java binding errors"</a>
<li><strong>Previous message:</strong> <a href="21545.php">Ralph Castain: "Re: [OMPI users] openmpi java binding errors"</a>
<li><strong>In reply to:</strong> <a href="21545.php">Ralph Castain: "Re: [OMPI users] openmpi java binding errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21547.php">Ralph Castain: "Re: [OMPI users] openmpi java binding errors"</a>
<li><strong>Reply:</strong> <a href="21547.php">Ralph Castain: "Re: [OMPI users] openmpi java binding errors"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I think I have it installed. when i type 'which libtool', the system
<br>
responds '/usr/local/bin/libtool'
<br>
<p><p>On Fri, Mar 15, 2013 at 7:27 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; It isn't finding libtool's dladvise support - try installing
</span><br>
<span class="quotelev1">&gt; the libtool-ltdl package
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mar 13, 2013, at 7:59 PM, Huasha Zhao &lt;creislerzhao_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi all,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I encountered an error when running openmpi Java applications (it works
</span><br>
<span class="quotelev1">&gt; fine with c/c++ applications). The java code compiles successfully, but it
</span><br>
<span class="quotelev1">&gt; crashed at runtime with:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; NO LT_DLADVISE - CANNOT LOAD LIBOMPI
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; JAVA BINDINGS FAILED TO LOAD REQUIRED LIBRARIES
</span><br>
<span class="quotelev1">&gt; I think it has to do with dynamically loading native libraries. Since I
</span><br>
<span class="quotelev1">&gt; have no experiences with JNI, I would like to resort to the community to
</span><br>
<span class="quotelev1">&gt; help solve the problem.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This is how exactly I install openmpi (on a EC2 AMI linux instance). I use
</span><br>
<span class="quotelev1">&gt; a nightly snapshot openmpi-1.9r28157.tar.gz
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; sudo ./configure --enable-mpi-java --prefix=/usr/local
</span><br>
<span class="quotelev1">&gt; sudo make all install
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I also set LD_LIBRARY_PATH to include &quot;/usr/local/lib&quot; which has
</span><br>
<span class="quotelev1">&gt; &quot;libmpi.so&quot;.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Chris Zhao
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  _______________________________________________
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
<p><p><p><pre>
-- 
Huasha Zhao
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-21546/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21547.php">Ralph Castain: "Re: [OMPI users] openmpi java binding errors"</a>
<li><strong>Previous message:</strong> <a href="21545.php">Ralph Castain: "Re: [OMPI users] openmpi java binding errors"</a>
<li><strong>In reply to:</strong> <a href="21545.php">Ralph Castain: "Re: [OMPI users] openmpi java binding errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21547.php">Ralph Castain: "Re: [OMPI users] openmpi java binding errors"</a>
<li><strong>Reply:</strong> <a href="21547.php">Ralph Castain: "Re: [OMPI users] openmpi java binding errors"</a>
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
