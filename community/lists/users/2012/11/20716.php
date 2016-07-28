<?
$subject_val = "Re: [OMPI users] What is the default install library for PATH and LD_LIBRARY_PATH";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov 13 13:44:05 2012" -->
<!-- isoreceived="20121113184405" -->
<!-- sent="Tue, 13 Nov 2012 19:44:01 +0100" -->
<!-- isosent="20121113184401" -->
<!-- name="Zbigniew Koza" -->
<!-- email="zzkoza_at_[hidden]" -->
<!-- subject="Re: [OMPI users] What is the default install library for PATH and LD_LIBRARY_PATH" -->
<!-- id="CA+dv2NE_N5HCd-MQi4wEtjXzb7QiZbqzLmZmsvko=infGs0wsA_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="F848764A-AF82-4E62-AD4A-9873CD8AC42B_at_gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] What is the default install library for PATH and LD_LIBRARY_PATH<br>
<strong>From:</strong> Zbigniew Koza (<em>zzkoza_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-11-13 13:44:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20717.php">huaibao zhang: "Re: [OMPI users] What is the default install library for PATH and LD_LIBRARY_PATH"</a>
<li><strong>Previous message:</strong> <a href="20715.php">huaibao zhang: "Re: [OMPI users] What is the default install library for PATH and LD_LIBRARY_PATH"</a>
<li><strong>In reply to:</strong> <a href="20713.php">huaibao zhang: "Re: [OMPI users] What is the default install library for PATH and LD_LIBRARY_PATH"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20717.php">huaibao zhang: "Re: [OMPI users] What is the default install library for PATH and LD_LIBRARY_PATH"</a>
<li><strong>Reply:</strong> <a href="20717.php">huaibao zhang: "Re: [OMPI users] What is the default install library for PATH and LD_LIBRARY_PATH"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
./configure does not compile, but generates the Makefile.
<br>
<p>Did you run
<br>
<span class="quotelev1">&gt; make
</span><br>
<span class="quotelev1">&gt; make install
</span><br>
after running ./configure?
<br>
<p>Notice also that openmpi can very likely be already installed on your
<br>
system from ubuntu packages;
<br>
anyway, I suggest you use ubuntu packages rather than compiling from
<br>
sources unless you have a
<br>
very good reason not to use the packaged version.
<br>
<p>you can also quite safely re-run make install to see where the
<br>
libraries are going to.
<br>
<p>If you're unsure which version of openmpi you have, you can start from
<br>
<span class="quotelev1">&gt; which mpicc
</span><br>
<span class="quotelev1">&gt; mpicc --showme
</span><br>
<p><p><p>Z Koza
<br>
<p>2012/11/13 huaibao zhang &lt;huaibao.zhang_at_[hidden]&gt;:
<br>
<span class="quotelev1">&gt; Hi Reuti,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks for your answer. I really appreciate it.
</span><br>
<span class="quotelev1">&gt; I am using an old version 1.4.3. for my code. If I only type $./configure,
</span><br>
<span class="quotelev1">&gt; it will compile, but I have no idea where it is installed. I typed $ find
</span><br>
<span class="quotelev1">&gt; /lib -name &quot;libopen-pal.so.0&quot;, but it shows nothing. Do you thinks it is
</span><br>
<span class="quotelev1">&gt; caused since I am not a root user or the old version.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Paul
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Huaibao (Paul) Zhang
</span><br>
<span class="quotelev1">&gt; Gas Surface Interactions Lab
</span><br>
<span class="quotelev1">&gt; Department of Mechanical Engineering
</span><br>
<span class="quotelev1">&gt; University of Kentucky,
</span><br>
<span class="quotelev1">&gt; Lexington, KY, 40506-0503
</span><br>
<span class="quotelev1">&gt; Office: 216 Ralph G. Anderson Building
</span><br>
<span class="quotelev1">&gt; Web:gsil.engineering.uky.edu
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Nov 13, 2012, at 12:24 PM, Reuti &lt;reuti_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Am 13.11.2012 um 15:44 schrieb huaibao zhang:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I installed OpenMPI on my Ubuntu 64 bit desktop. At first, I did not specify
</span><br>
<span class="quotelev1">&gt; &quot;prefix&quot;, so even I've installed it. I could not find where it is. Since the
</span><br>
<span class="quotelev1">&gt; &quot;PATH&quot; and &quot;LD&quot; have to be given, the mpicc can find the &quot;lib open-pal.so.0&quot;
</span><br>
<span class="quotelev1">&gt; file.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You mean &quot;...can't find...&quot;? If you use the default location, it should have
</span><br>
<span class="quotelev1">&gt; the correct settings already even without adding any path to PATH or
</span><br>
<span class="quotelev1">&gt; LD_LIBRARY_PATH.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You can use:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ find /lib -name &quot;libopen-pal.so.0&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; to spot the location. But I wonder about the version. The actual one seems
</span><br>
<span class="quotelev1">&gt; to be libopen-pal.so.4 -&gt; libopen-pal.so.4.0.3 - which version are you
</span><br>
<span class="quotelev1">&gt; using?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- Reuti
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20717.php">huaibao zhang: "Re: [OMPI users] What is the default install library for PATH and LD_LIBRARY_PATH"</a>
<li><strong>Previous message:</strong> <a href="20715.php">huaibao zhang: "Re: [OMPI users] What is the default install library for PATH and LD_LIBRARY_PATH"</a>
<li><strong>In reply to:</strong> <a href="20713.php">huaibao zhang: "Re: [OMPI users] What is the default install library for PATH and LD_LIBRARY_PATH"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20717.php">huaibao zhang: "Re: [OMPI users] What is the default install library for PATH and LD_LIBRARY_PATH"</a>
<li><strong>Reply:</strong> <a href="20717.php">huaibao zhang: "Re: [OMPI users] What is the default install library for PATH and LD_LIBRARY_PATH"</a>
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
