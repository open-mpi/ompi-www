<?
$subject_val = "Re: [OMPI users] What is the default install library for PATH and LD_LIBRARY_PATH";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov 13 13:56:22 2012" -->
<!-- isoreceived="20121113185622" -->
<!-- sent="Tue, 13 Nov 2012 13:56:17 -0500" -->
<!-- isosent="20121113185617" -->
<!-- name="huaibao zhang" -->
<!-- email="huaibao.zhang_at_[hidden]" -->
<!-- subject="Re: [OMPI users] What is the default install library for PATH and LD_LIBRARY_PATH" -->
<!-- id="1552DC4F-9CCD-4CC4-BB05-1B5ED4F90BE0_at_gmail.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CA+dv2NE_N5HCd-MQi4wEtjXzb7QiZbqzLmZmsvko=infGs0wsA_at_mail.gmail.com" -->
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
<strong>From:</strong> huaibao zhang (<em>huaibao.zhang_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-11-13 13:56:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20718.php">Reuti: "Re: [OMPI users] Setting RPATH for Open MPI libraries"</a>
<li><strong>Previous message:</strong> <a href="20716.php">Zbigniew Koza: "Re: [OMPI users] What is the default install library for PATH and LD_LIBRARY_PATH"</a>
<li><strong>In reply to:</strong> <a href="20716.php">Zbigniew Koza: "Re: [OMPI users] What is the default install library for PATH and LD_LIBRARY_PATH"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20715.php">huaibao zhang: "Re: [OMPI users] What is the default install library for PATH and LD_LIBRARY_PATH"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Koza,
<br>
<p>Thanks a lot for your help. It is indeed installed already. The version is 1.4.3
<br>
<p>Paul
<br>
<pre>
--
Huaibao (Paul) Zhang
Gas Surface Interactions Lab
Department of Mechanical Engineering
University of Kentucky,
Lexington, KY, 40506-0503
Office: 216 Ralph G. Anderson Building
Web:gsil.engineering.uky.edu
On Nov 13, 2012, at 1:44 PM, Zbigniew Koza &lt;zzkoza_at_[hidden]&gt; wrote:
&gt; ./configure does not compile, but generates the Makefile.
&gt; 
&gt; Did you run
&gt;&gt; make
&gt;&gt; make install
&gt; after running ./configure?
&gt; 
&gt; Notice also that openmpi can very likely be already installed on your
&gt; system from ubuntu packages;
&gt; anyway, I suggest you use ubuntu packages rather than compiling from
&gt; sources unless you have a
&gt; very good reason not to use the packaged version.
&gt; 
&gt; you can also quite safely re-run make install to see where the
&gt; libraries are going to.
&gt; 
&gt; If you're unsure which version of openmpi you have, you can start from
&gt;&gt; which mpicc
&gt;&gt; mpicc --showme
&gt; 
&gt; 
&gt; 
&gt; Z Koza
&gt; 
&gt; 2012/11/13 huaibao zhang &lt;huaibao.zhang_at_[hidden]&gt;:
&gt;&gt; Hi Reuti,
&gt;&gt; 
&gt;&gt; Thanks for your answer. I really appreciate it.
&gt;&gt; I am using an old version 1.4.3. for my code. If I only type $./configure,
&gt;&gt; it will compile, but I have no idea where it is installed. I typed $ find
&gt;&gt; /lib -name &quot;libopen-pal.so.0&quot;, but it shows nothing. Do you thinks it is
&gt;&gt; caused since I am not a root user or the old version.
&gt;&gt; 
&gt;&gt; Thanks,
&gt;&gt; Paul
&gt;&gt; 
&gt;&gt; --
&gt;&gt; Huaibao (Paul) Zhang
&gt;&gt; Gas Surface Interactions Lab
&gt;&gt; Department of Mechanical Engineering
&gt;&gt; University of Kentucky,
&gt;&gt; Lexington, KY, 40506-0503
&gt;&gt; Office: 216 Ralph G. Anderson Building
&gt;&gt; Web:gsil.engineering.uky.edu
&gt;&gt; 
&gt;&gt; On Nov 13, 2012, at 12:24 PM, Reuti &lt;reuti_at_[hidden]&gt; wrote:
&gt;&gt; 
&gt;&gt; Am 13.11.2012 um 15:44 schrieb huaibao zhang:
&gt;&gt; 
&gt;&gt; I installed OpenMPI on my Ubuntu 64 bit desktop. At first, I did not specify
&gt;&gt; &quot;prefix&quot;, so even I've installed it. I could not find where it is. Since the
&gt;&gt; &quot;PATH&quot; and &quot;LD&quot; have to be given, the mpicc can find the &quot;lib open-pal.so.0&quot;
&gt;&gt; file.
&gt;&gt; 
&gt;&gt; 
&gt;&gt; You mean &quot;...can't find...&quot;? If you use the default location, it should have
&gt;&gt; the correct settings already even without adding any path to PATH or
&gt;&gt; LD_LIBRARY_PATH.
&gt;&gt; 
&gt;&gt; You can use:
&gt;&gt; 
&gt;&gt; $ find /lib -name &quot;libopen-pal.so.0&quot;
&gt;&gt; 
&gt;&gt; to spot the location. But I wonder about the version. The actual one seems
&gt;&gt; to be libopen-pal.so.4 -&gt; libopen-pal.so.4.0.3 - which version are you
&gt;&gt; using?
&gt;&gt; 
&gt;&gt; -- Reuti
&gt;&gt; _______________________________________________
&gt;&gt; users mailing list
&gt;&gt; users_at_[hidden]
&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt;&gt; 
&gt;&gt; 
&gt;&gt; 
&gt;&gt; _______________________________________________
&gt;&gt; users mailing list
&gt;&gt; users_at_[hidden]
&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt; _______________________________________________
&gt; users mailing list
&gt; users_at_[hidden]
&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-20717/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20718.php">Reuti: "Re: [OMPI users] Setting RPATH for Open MPI libraries"</a>
<li><strong>Previous message:</strong> <a href="20716.php">Zbigniew Koza: "Re: [OMPI users] What is the default install library for PATH and LD_LIBRARY_PATH"</a>
<li><strong>In reply to:</strong> <a href="20716.php">Zbigniew Koza: "Re: [OMPI users] What is the default install library for PATH and LD_LIBRARY_PATH"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20715.php">huaibao zhang: "Re: [OMPI users] What is the default install library for PATH and LD_LIBRARY_PATH"</a>
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
