<?
$subject_val = "Re: [OMPI users] unknow option &quot;--tree-spawn&quot; with OpenMPI-1.7.1";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun 14 12:34:14 2013" -->
<!-- isoreceived="20130614163414" -->
<!-- sent="Sat, 15 Jun 2013 00:33:39 +0800" -->
<!-- isosent="20130614163339" -->
<!-- name="Zehan Cui" -->
<!-- email="zehan.cui_at_[hidden]" -->
<!-- subject="Re: [OMPI users] unknow option &amp;quot;--tree-spawn&amp;quot; with OpenMPI-1.7.1" -->
<!-- id="CALr9+a4vbzvVyOepCGEbAeBkrf3KWqfYr2gbSdsDsAq-GKt0Mw_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="EF66BBEB19BADC41AC8CCF5F684F07FC4F686015_at_xmb-rcd-x01.cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] unknow option &quot;--tree-spawn&quot; with OpenMPI-1.7.1<br>
<strong>From:</strong> Zehan Cui (<em>zehan.cui_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-06-14 12:33:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22097.php">Brian Budge: "Re: [OMPI users] MPI_THREAD_FUNNELED and enable-mpi-thread-multiple"</a>
<li><strong>Previous message:</strong> <a href="22095.php">Jeff Squyres (jsquyres): "Re: [OMPI users] unknow option &quot;--tree-spawn&quot; with OpenMPI-1.7.1"</a>
<li><strong>In reply to:</strong> <a href="22095.php">Jeff Squyres (jsquyres): "Re: [OMPI users] unknow option &quot;--tree-spawn&quot; with OpenMPI-1.7.1"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks.
<br>
<p>That's exactly the problem. When add prefix to the mpirun command,
<br>
everything goes fine.
<br>
<p><p>- Zehan Cui
<br>
<p><p><p>On Fri, Jun 14, 2013 at 10:25 PM, Jeff Squyres (jsquyres) &lt;
<br>
jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Check the PATH you get when you run non-interactively on the remote
</span><br>
<span class="quotelev1">&gt; machine:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ssh gnode100 env | grep PATH
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jun 14, 2013, at 10:09 AM, Zehan Cui &lt;zehan.cui_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; I think the PATH setting is ok. I forgot to mention that it run well on
</span><br>
<span class="quotelev1">&gt; local machine.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; The PATH setting on the local machine is
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; [cmy_at_gLoginNode1 ~]$ echo $PATH
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; /home/cmy/clc/benchmarks/nasm-2.09.10:/home3/cmy/czh/opt/ompi-1.7.1/bin/:/home3/cmy/czh/opt/autoconf-2.69/bin/:/home3/cmy/czh/opt/mvapich2-1.9/bin/:/home/cmy/wr/local/ft-mvapich2-1.8a2/bin:/home/cmy/wr/local/mvapich2-1.8a2/bin:/usr/mpi/gcc/mvapich2-1.4.1/bin:/home3/cmy/czh/ompi/bin/:/home/cmy/huangyb/gem5/gcc/gcc-4.3/bin:/home/cmy/huangyb/gem5/swig/bin/:/home/cmy/huangyb/gem5/scons/bin::/home/cmy/huangyb/local/mercurial/bin:/home/cmy/huangyb/local/python-2.7.3/bin/:/home/SOFT/intel/Compiler/11.0/083/bin/intel64:/usr/mpi/gcc/openmpi-1.4.2/bin/:/home/SOFT/intel/Compiler/11.0/083/bin/intel64:/home/cmy/tgm/cmake/bin:/usr/local/mvapich2/bin:/usr/local/mpich-pgi/bin:/opt/pgi/linux86-64/7.0-2/bin:/usr/bin:/usr/lib64/qt-3.3/bin:/usr/kerberos/bin:/opt/gridviewnew/pbs//dispatcher-sched//bin:/opt/gridviewnew/pbs//dispatcher-sched//sbin:/opt/gridviewnew/pbs//dispatcher//bin:/opt/gridviewnew/pbs//dispatcher//sbin:/usr/local/bin:/bin:/usr/bin:/usr/X11R6/bin:/home/cmy/zxx/work_spring_2011/iaca-lin32/bin:/home/cmy/bin:/home/tgm/ljj/software/dmidecode-2.11/:/usr/local/oski_2007/include
</span><br>
<span class="quotelev2">&gt; &gt; [cmy_at_gLoginNode1 ~]$ echo $LD_LIBRARY_PATH
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; /home3/cmy/czh/opt/ompi-1.7.1/lib/:/home3/cmy/czh/opt/mvapich2-1.9/lib/:/home/cmy/wr/local/ft-mvapich2-1.8a2/lib:/home/cmy/wr/local/mvapich2-1.8a2/lib:/usr/mpi/gcc/mvapich2-1.4.1/lib:/home3/cmy/czh/ompi/lib/:/home/cmy/huangyb/gem5/gcc/gcc-4.3/lib64:/home/cmy/huangyb/gem5/gcc/gcc-4.3/lib/:/home/cmy/huangyb/local/python-2.7.3/lib/:/usr/local/lib64:/usr/local/lib:/home/cmy/clc/DRAMSim2:/home/SOFT/intel/Compiler/11.0/083/lib/intel64:/home/cmy/zxx/oski-icc/lib/oski:/usr/mpi/gcc/openmpi-1.4.2/lib/:/usr/lib/python2.4/config:/home/SOFT/intel/Compiler/11.0/083/mkl/lib/em64t:/home/cmy/tgm/hpx/build/linux/lib:/home/cmy/yanjie/boost/lib:/usr/local/mvapich2/lib:/home/cmy/yanjie/qthread/lib:/opt/gridviewnew/pbs//dispatcher//lib::/usr/local/lib64:/usr/local/lib:/home/cmy/zxx/work_spring_2011/iaca-lin32/lib
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; The path setting on gnode100 is the same too
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; [cmy_at_gnode100 ~]$
</span><br>
<span class="quotelev2">&gt; &gt; [cmy_at_gnode100 ~]$ echo $PATH
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; /home/cmy/clc/benchmarks/nasm-2.09.10:/home3/cmy/czh/opt/ompi-1.7.1/bin/:/home3/cmy/czh/opt/autoconf-2.69/bin/:/home3/cmy/czh/opt/mvapich2-1.9/bin/:/home/cmy/wr/local/ft-mvapich2-1.8a2/bin:/home/cmy/wr/local/mvapich2-1.8a2/bin:/usr/mpi/gcc/mvapich2-1.4.1/bin:/home3/cmy/czh/ompi/bin/:/home/cmy/huangyb/gem5/gcc/gcc-4.3/bin:/home/cmy/huangyb/gem5/swig/bin/:/home/cmy/huangyb/gem5/scons/bin::/home/cmy/huangyb/local/mercurial/bin:/home/cmy/huangyb/local/python-2.7.3/bin/:/home/SOFT/intel/Compiler/11.0/083/bin/intel64:/usr/mpi/gcc/openmpi-1.4.2/bin/:/home/SOFT/intel/Compiler/11.0/083/bin/intel64:/home/cmy/tgm/cmake/bin:/usr/local/mvapich2/bin:/usr/local/mpich-pgi/bin:/opt/pgi/linux86-64/7.0-2/bin:/usr/bin:/usr/lib64/qt-3.3/bin:/usr/kerberos/bin:/opt/gridviewnew/pbs//dispatcher-sched//bin:/opt/gridviewnew/pbs//dispatcher-sched//sbin:/opt/gridviewnew/pbs//dispatcher//bin:/opt/gridviewnew/pbs//dispatcher//sbin:/usr/local/bin:/bin:/usr/bin:/home/cmy/zxx/work_spring_2011/iaca-lin32/bin:/home/cmy/bin:/home/tgm/ljj/software/dmidecode-2.11/:/usr/local/oski_2007/include
</span><br>
<span class="quotelev2">&gt; &gt; [cmy_at_gnode100 ~]$
</span><br>
<span class="quotelev2">&gt; &gt; [cmy_at_gnode100 ~]$ echo $LD_LIBRARY_PATH
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; /home3/cmy/czh/opt/ompi-1.7.1/lib/:/home3/cmy/czh/opt/mvapich2-1.9/lib/:/home/cmy/wr/local/ft-mvapich2-1.8a2/lib:/home/cmy/wr/local/mvapich2-1.8a2/lib:/usr/mpi/gcc/mvapich2-1.4.1/lib:/home3/cmy/czh/ompi/lib/:/home/cmy/huangyb/gem5/gcc/gcc-4.3/lib64:/home/cmy/huangyb/gem5/gcc/gcc-4.3/lib/:/home/cmy/huangyb/local/python-2.7.3/lib/:/usr/local/lib64:/usr/local/lib:/home/cmy/clc/DRAMSim2:/home/SOFT/intel/Compiler/11.0/083/lib/intel64:/home/cmy/zxx/oski-icc/lib/oski:/usr/mpi/gcc/openmpi-1.4.2/lib/:/usr/lib/python2.4/config:/home/SOFT/intel/Compiler/11.0/083/mkl/lib/em64t:/home/cmy/tgm/hpx/build/linux/lib:/home/cmy/yanjie/boost/lib:/usr/local/mvapich2/lib:/home/cmy/yanjie/qthread/lib:/opt/gridviewnew/pbs//dispatcher//lib::/usr/local/lib64:/usr/local/lib:/home/cmy/zxx/work_spring_2011/iaca-lin32/lib
</span><br>
<span class="quotelev2">&gt; &gt; [cmy_at_gnode100 ~]$
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Best Regards
</span><br>
<span class="quotelev2">&gt; &gt; Zehan Cui(&#229;&#180;&#148;&#230;&#179;&#189;&#230;&#177;&#137;)
</span><br>
<span class="quotelev2">&gt; &gt; -----------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; Institute of Computing Technology, Chinese Academy of Sciences.
</span><br>
<span class="quotelev2">&gt; &gt; No.6 Kexueyuan South Road Zhongguancun,Haidian District Beijing,China
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Fri, Jun 14, 2013 at 9:32 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; You aren't setting the path correctly on your backend machines, and so
</span><br>
<span class="quotelev1">&gt; they are picking up an older version of OMPI.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Jun 14, 2013, at 2:08 AM, Zehan Cui &lt;zehan.cui_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Hi,
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; I have just install OpenMPI-1.7.1 and cannot get it running.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Here is the error messages:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [cmy_at_gLoginNode1 test_nbc]$ mpirun -n 4 -host gnode100 ./hello
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [gnode100:31789] Error: unknown option &quot;--tree-spawn&quot;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; input in flex scanner failed
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [gLoginNode1:14920] [[62542,0],0] ORTE_ERROR_LOG: A message is
</span><br>
<span class="quotelev1">&gt; attempting to be sent to a process whose contact information is unknown in
</span><br>
<span class="quotelev1">&gt; file rml_oob_send.c at line 362
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [gLoginNode1:14920] [[62542,0],0] attempted to send to [[62542,0],1]:
</span><br>
<span class="quotelev1">&gt; tag 15
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [gLoginNode1:14920] [[62542,0],0] ORTE_ERROR_LOG: A message is
</span><br>
<span class="quotelev1">&gt; attempting to be sent to a process whose contact information is unknown in
</span><br>
<span class="quotelev1">&gt; file base/grpcomm_base_xcast.c at line 166
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; I have run it on several nodes, and got the same messages.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; - Zehan Cui
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt; &gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-22096/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22097.php">Brian Budge: "Re: [OMPI users] MPI_THREAD_FUNNELED and enable-mpi-thread-multiple"</a>
<li><strong>Previous message:</strong> <a href="22095.php">Jeff Squyres (jsquyres): "Re: [OMPI users] unknow option &quot;--tree-spawn&quot; with OpenMPI-1.7.1"</a>
<li><strong>In reply to:</strong> <a href="22095.php">Jeff Squyres (jsquyres): "Re: [OMPI users] unknow option &quot;--tree-spawn&quot; with OpenMPI-1.7.1"</a>
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
