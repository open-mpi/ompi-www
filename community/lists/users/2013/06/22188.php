<?
$subject_val = "Re: [OMPI users] OpenMPI 1.6.4 and Intel Composer_xe_2013.4.183: problem with remote runs, orted: error while loading shared libraries: libimf.so";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun 21 14:38:10 2013" -->
<!-- isoreceived="20130621183810" -->
<!-- sent="Fri, 21 Jun 2013 14:38:05 -0400" -->
<!-- isosent="20130621183805" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI 1.6.4 and Intel Composer_xe_2013.4.183: problem with remote runs, orted: error while loading shared libraries: libimf.so" -->
<!-- id="51C49D8D.8050203_at_ldeo.columbia.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CACDq=fo5XmgXtNC+cnYrn7BSggVNpdxMj5Fj7uvKuvE_1ikAOA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMPI 1.6.4 and Intel Composer_xe_2013.4.183: problem with remote runs, orted: error while loading shared libraries: libimf.so<br>
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-06-21 14:38:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22189.php">Jeff Squyres (jsquyres): "Re: [OMPI users] New Cluster Centos 6.4 with Openmpi 1.6.4"</a>
<li><strong>Previous message:</strong> <a href="22187.php">Stefano Zaghi: "Re: [OMPI users] OpenMPI 1.6.4 and Intel Composer_xe_2013.4.183: problem with remote runs, orted: error while loading shared libraries: libimf.so"</a>
<li><strong>In reply to:</strong> <a href="22186.php">Stefano Zaghi: "Re: [OMPI users] OpenMPI 1.6.4 and Intel Composer_xe_2013.4.183: problem with remote runs, orted: error while loading shared libraries: libimf.so"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22211.php">Stefano Zaghi: "Re: [OMPI users] OpenMPI 1.6.4 and Intel Composer_xe_2013.4.183: problem with remote runs, orted: error while loading shared libraries: libimf.so"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Stefano
<br>
<p>That doesn't seem to be an Open MPI problem,
<br>
but an Intel environment problem.
<br>
<p>Here I have this library directory (on a slightly older version):
<br>
<p>&nbsp;&nbsp;.../composerxe/2013.3.163/compiler/lib/intel64/
<br>
<p>but Intel keeps changing their directory structure,
<br>
playing with bunches of soft links, etc,
<br>
(which is quite annoying),
<br>
so your newer version may not have the same directories.
<br>
<p>However, this should be all properly set if you run the
<br>
Intel &quot;source compilervars.[sh,csh] intel64&quot;, as Jeff noted.
<br>
I read on your first email that you do that.
<br>
You don't need/shouldn't to change that by hand,
<br>
unless Intel really messed up their own environment settings
<br>
on their compilervars script.
<br>
<p>Did you do &quot;ldd your_executable&quot;, to see if it finds libimf.so ?
<br>
<p>I hope this helps,
<br>
Gus Correa
<br>
<p>On 06/21/2013 02:05 PM, Stefano Zaghi wrote:
<br>
<span class="quotelev1">&gt; Hi Gus,
</span><br>
<span class="quotelev1">&gt; thank you for your replay.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The strange path I have chosen is because this was only a test. However
</span><br>
<span class="quotelev1">&gt; my home dir is shared on all nodes and the lib dir is not a simple
</span><br>
<span class="quotelev1">&gt; simlink. I think that Thomas is right, I have to remove intel64 from
</span><br>
<span class="quotelev1">&gt; Intel/lib path. Monday I will try.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank you again.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Il giorno 21/giu/2013 17:55, &quot;Gus Correa&quot; &lt;gus_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &lt;mailto:gus_at_[hidden]&gt;&gt; ha scritto:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Hi Stefano
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Make sure your Intel compiler's shared libraries
</span><br>
<span class="quotelev1">&gt;     are accessible on all nodes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Is your /home directory shared across all nodes?
</span><br>
<span class="quotelev1">&gt;     How about /opt (if Intel is installed there)?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     By default Intel installs the compilers on /opt, which in typical
</span><br>
<span class="quotelev1">&gt;     clusters (and Linux distributions) is a local directory (to each node),
</span><br>
<span class="quotelev1">&gt;     not shared via NFS.
</span><br>
<span class="quotelev1">&gt;     Although you seem to have installed it somewhere else,
</span><br>
<span class="quotelev1">&gt;     /home/stefano/opt maybe, if /home/stefano/opt
</span><br>
<span class="quotelev1">&gt;     is just a soft link to /opt, not a real directory,
</span><br>
<span class="quotelev1">&gt;     that may not to do the trick across the cluster network.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     This error:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt;      &gt;&gt;         /home/stefano/opt/mpi/openmpi/__1.6.4/intel/bin/orted: error
</span><br>
<span class="quotelev3">&gt;      &gt;&gt;         while loading shared libraries: libimf.so: cannot open
</span><br>
<span class="quotelev1">&gt;     shared
</span><br>
<span class="quotelev3">&gt;      &gt;&gt;         object file: No such file or directory
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     suggests something like that is going on (libimf.so is an
</span><br>
<span class="quotelev1">&gt;     *Intel shared library*, it is *not an Open MPI libary*).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     To have all needed tools (OpenMPI and Intel)
</span><br>
<span class="quotelev1">&gt;     available on all nodes, there are two typical solutions
</span><br>
<span class="quotelev1">&gt;     (by the way, see this FAQ:
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/faq/?__category=building#where-to-__install">http://www.open-mpi.org/faq/?__category=building#where-to-__install</a>
</span><br>
<span class="quotelev1">&gt;     &lt;<a href="http://www.open-mpi.org/faq/?category=building#where-to-install">http://www.open-mpi.org/faq/?category=building#where-to-install</a>&gt;):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     1) Install them on all nodes, via RPM, or configure/make/install, or
</span><br>
<span class="quotelev1">&gt;     other mechanism.
</span><br>
<span class="quotelev1">&gt;     This is time consuming and costly to maintain, but scales well
</span><br>
<span class="quotelev1">&gt;     in big or small clusters.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     2)  Install them on your master/head/adminsitration/__storage node,
</span><br>
<span class="quotelev1">&gt;     and and share them via network (typicaly via NFS export/mount).
</span><br>
<span class="quotelev1">&gt;     This is easy to maintain, and scales well in small/medium clusters,
</span><br>
<span class="quotelev1">&gt;     but not so much on big ones.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Make sure the Intel and MPI directories are either shared by
</span><br>
<span class="quotelev1">&gt;     or present/installed on all nodes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     I also wonder if you really need these many environment variables:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt;      &gt;&gt; LD_LIBRARY_PATH=${MPI}/lib/__openmpi:${MPI}/lib:$LD___LIBRARY_PATH
</span><br>
<span class="quotelev3">&gt;      &gt;&gt; export LD_RUN_PATH=${MPI}/lib/__openmpi:${MPI}/lib:$LD_RUN___PATH
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     or if that may be actually replaced by the simpler form:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt;      &gt;&gt; LD_LIBRARY_PATH=${MPI}/lib:$__LD_LIBRARY_PATH
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     I hope it helps,
</span><br>
<span class="quotelev1">&gt;     Gus Correa
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     On 06/21/2013 04:35 AM, Stefano Zaghi wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         Wow... I think you are right... I will am check after the job I have
</span><br>
<span class="quotelev1">&gt;         just started will finish.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         Thank you again.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         See you soon
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         Stefano Zaghi
</span><br>
<span class="quotelev1">&gt;         Ph.D. Aerospace Engineer,
</span><br>
<span class="quotelev1">&gt;         Research Scientist, Dept. of Computational Hydrodynamics at
</span><br>
<span class="quotelev1">&gt;         *CNR-INSEAN*
</span><br>
<span class="quotelev1">&gt;         &lt;<a href="http://www.insean.cnr.it/en/__content/cnr-insean">http://www.insean.cnr.it/en/__content/cnr-insean</a>
</span><br>
<span class="quotelev1">&gt;         &lt;<a href="http://www.insean.cnr.it/en/content/cnr-insean">http://www.insean.cnr.it/en/content/cnr-insean</a>&gt;&gt;
</span><br>
<span class="quotelev1">&gt;         The Italian Ship Model Basin
</span><br>
<span class="quotelev1">&gt;         (+39) 06.50299297 &lt;tel:%28%2B39%29%2006.50299297&gt; (Office)
</span><br>
<span class="quotelev1">&gt;         My codes:
</span><br>
<span class="quotelev1">&gt;         *OFF* &lt;<a href="https://github.com/szaghi/OFF">https://github.com/szaghi/OFF</a>__&gt;, Open source Finite
</span><br>
<span class="quotelev1">&gt;         volumes Fluid
</span><br>
<span class="quotelev1">&gt;         dynamics code
</span><br>
<span class="quotelev1">&gt;         *Lib_VTK_IO* &lt;<a href="https://github.com/szaghi/__Lib_VTK_IO">https://github.com/szaghi/__Lib_VTK_IO</a>
</span><br>
<span class="quotelev1">&gt;         &lt;<a href="https://github.com/szaghi/Lib_VTK_IO">https://github.com/szaghi/Lib_VTK_IO</a>&gt;&gt;, a Fortran library
</span><br>
<span class="quotelev1">&gt;         to write and read data conforming the VTK standard
</span><br>
<span class="quotelev1">&gt;         *IR_Precision* &lt;<a href="https://github.com/szaghi/IR___Precision">https://github.com/szaghi/IR___Precision</a>
</span><br>
<span class="quotelev1">&gt;         &lt;<a href="https://github.com/szaghi/IR_Precision">https://github.com/szaghi/IR_Precision</a>&gt;&gt;, a Fortran
</span><br>
<span class="quotelev1">&gt;         (standard 2003) module to develop portable codes
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         2013/6/21 &lt;thomas.forde_at_[hidden]
</span><br>
<span class="quotelev1">&gt;         &lt;mailto:thomas.forde_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;         &lt;mailto:thomas.forde_at_ulstein.__com
</span><br>
<span class="quotelev1">&gt;         &lt;mailto:thomas.forde_at_[hidden]&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;              hi Stefano
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;              /home/stefano/opt/intel/2013.__4.183/lib/intel64/ is also
</span><br>
<span class="quotelev1">&gt;         the wrong
</span><br>
<span class="quotelev1">&gt;              path, as the file is in ..183/lib/ and not ...183/lib/intel64/
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;              is that why?
</span><br>
<span class="quotelev1">&gt;              ./Thomas
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;              Den 21. juni 2013 kl. 10:26 skrev &quot;Stefano Zaghi&quot;
</span><br>
<span class="quotelev1">&gt;         &lt;stefano.zaghi_at_[hidden] &lt;mailto:stefano.zaghi_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;         &lt;mailto:stefano.zaghi_at_gmail.__com
</span><br>
<span class="quotelev1">&gt;         &lt;mailto:stefano.zaghi_at_[hidden]&gt;&gt;&gt;:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                  Dear Thomas,
</span><br>
<span class="quotelev1">&gt;                  thank you again.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                  Symlink in /usr/lib64 is not enough, I have symlinked also
</span><br>
<span class="quotelev1">&gt;                  in /home/stefano/opt/mpi/openmpi/__1.6.4/intel/lib and,
</span><br>
<span class="quotelev1">&gt;             as expected,
</span><br>
<span class="quotelev1">&gt;                  not only libimf.so but also ibirng.so and libintlc.so.5
</span><br>
<span class="quotelev1">&gt;             are necessary.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                  Now also remote runs works, but this is only a
</span><br>
<span class="quotelev1">&gt;             workaround, I still
</span><br>
<span class="quotelev1">&gt;                  not understand why mpirun do not find intel library even if
</span><br>
<span class="quotelev1">&gt;                  LD_LIBRARY_PATH contains also
</span><br>
<span class="quotelev1">&gt;                   /home/stefano/opt/intel/2013.__4.183/lib/intel64. Can
</span><br>
<span class="quotelev1">&gt;             you try
</span><br>
<span class="quotelev1">&gt;                  explain again?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                  Thank you very much.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                  Stefano Zaghi
</span><br>
<span class="quotelev1">&gt;                  Ph.D. Aerospace Engineer,
</span><br>
<span class="quotelev1">&gt;                  Research Scientist, Dept. of Computational Hydrodynamics at
</span><br>
<span class="quotelev1">&gt;                  *CNR-INSEAN*
</span><br>
<span class="quotelev1">&gt;             &lt;<a href="http://www.insean.cnr.it/en/__content/cnr-insean">http://www.insean.cnr.it/en/__content/cnr-insean</a>
</span><br>
<span class="quotelev1">&gt;             &lt;<a href="http://www.insean.cnr.it/en/content/cnr-insean">http://www.insean.cnr.it/en/content/cnr-insean</a>&gt;&gt;
</span><br>
<span class="quotelev1">&gt;                  The Italian Ship Model Basin
</span><br>
<span class="quotelev1">&gt;             (+39) 06.50299297 &lt;tel:%28%2B39%29%2006.50299297&gt; (Office)
</span><br>
<span class="quotelev1">&gt;                  My codes:
</span><br>
<span class="quotelev1">&gt;                  *OFF* &lt;<a href="https://github.com/szaghi/OFF">https://github.com/szaghi/OFF</a>__&gt;, Open source
</span><br>
<span class="quotelev1">&gt;             Finite volumes
</span><br>
<span class="quotelev1">&gt;                  Fluid dynamics code
</span><br>
<span class="quotelev1">&gt;                  *Lib_VTK_IO* &lt;<a href="https://github.com/szaghi/__Lib_VTK_IO">https://github.com/szaghi/__Lib_VTK_IO</a>
</span><br>
<span class="quotelev1">&gt;             &lt;<a href="https://github.com/szaghi/Lib_VTK_IO">https://github.com/szaghi/Lib_VTK_IO</a>&gt;&gt;, a  would
</span><br>
<span class="quotelev1">&gt;                  Fortran library to write and read data conforming the
</span><br>
<span class="quotelev1">&gt;             VTK standard
</span><br>
<span class="quotelev1">&gt;                  *IR_Precision*
</span><br>
<span class="quotelev1">&gt;             &lt;<a href="https://github.com/szaghi/IR___Precision">https://github.com/szaghi/IR___Precision</a>
</span><br>
<span class="quotelev1">&gt;             &lt;<a href="https://github.com/szaghi/IR_Precision">https://github.com/szaghi/IR_Precision</a>&gt;&gt;, a Fortran
</span><br>
<span class="quotelev1">&gt;                  (standard 2003) module to develop portable codes
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                  2013/6/21 &lt;thomas.forde_at_[hidden]
</span><br>
<span class="quotelev1">&gt;             &lt;mailto:thomas.forde_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;             &lt;mailto:thomas.forde_at_ulstein.__com
</span><br>
<span class="quotelev1">&gt;             &lt;mailto:thomas.forde_at_[hidden]&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                      your settings are as following:
</span><br>
<span class="quotelev1">&gt;                      export MPI=/home/stefano/opt/mpi/__openmpi/1.6.4/intel
</span><br>
<span class="quotelev1">&gt;                      export PATH=${MPI}/bin:$PATH
</span><br>
<span class="quotelev1">&gt;                      export
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             LD_LIBRARY_PATH=${MPI}/lib/__openmpi:${MPI}/lib:$LD___LIBRARY_PATH
</span><br>
<span class="quotelev1">&gt;                      export
</span><br>
<span class="quotelev1">&gt;             LD_RUN_PATH=${MPI}/lib/__openmpi:${MPI}/lib:$LD_RUN___PATH
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                      and your path to libimf.so file is
</span><br>
<span class="quotelev1">&gt;                      /home/stefano/opt/intel/2013.__4.183/lib/libimf.so
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                      your export LD_LIbrary_PATH if i can decude it
</span><br>
<span class="quotelev1">&gt;             right would be
</span><br>
<span class="quotelev1">&gt;                      because you use the $MPI first.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             /home/stefano/opt/mpi/openmpi/__1.64./intel/lib/openmpi and
</span><br>
<span class="quotelev1">&gt;                      /home/stefano/opt/mpi/openmpi/__1.64./intel/lib
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                      as you can see it doesnt look for the files int he
</span><br>
<span class="quotelev1">&gt;             right place.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                      the simplest thing i would try is to symlink the
</span><br>
<span class="quotelev1">&gt;             libimf.so
</span><br>
<span class="quotelev1">&gt;                      file to /usr/lib64 and should give you a workaround.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                      From: Stefano Zaghi &lt;stefano.zaghi_at_[hidden]
</span><br>
<span class="quotelev1">&gt;             &lt;mailto:stefano.zaghi_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;             &lt;mailto:stefano.zaghi_at_gmail.__com
</span><br>
<span class="quotelev1">&gt;             &lt;mailto:stefano.zaghi_at_[hidden]&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;                      To: Open MPI Users &lt;users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;             &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;             &lt;mailto:users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;&gt;&gt;,
</span><br>
<span class="quotelev1">&gt;                      Date: 21.06.2013 09 &lt;tel:21.06.2013%2009&gt;:45
</span><br>
<span class="quotelev1">&gt;                      Subject: Re: [OMPI users] OpenMPI 1.6.4 and Intel
</span><br>
<span class="quotelev1">&gt;                      Composer_xe_2013.4.183: problem with remote runs,
</span><br>
<span class="quotelev1">&gt;             orted: error
</span><br>
<span class="quotelev1">&gt;                      while loading shared libraries: libimf.so
</span><br>
<span class="quotelev1">&gt;                      Sent by: users-bounces_at_[hidden]
</span><br>
<span class="quotelev1">&gt;             &lt;mailto:users-bounces_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;             &lt;mailto:users-bounces_at_open-__mpi.org
</span><br>
<span class="quotelev1">&gt;             &lt;mailto:users-bounces_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             ------------------------------__------------------------------__------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                      Dear Thomas,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                      thank you very much for your very fast replay.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                      Yes I have that library in the correct place:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                      -rwxr-xr-x 1 stefano users 3.0M May 20 14:22
</span><br>
<span class="quotelev1">&gt;                      opt/intel/2013.4.183/lib/__intel64/libimf.so
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                      Stefano Zaghi
</span><br>
<span class="quotelev1">&gt;                      Ph.D. Aerospace Engineer,
</span><br>
<span class="quotelev1">&gt;                      Research Scientist, Dept. of Computational
</span><br>
<span class="quotelev1">&gt;             Hydrodynamics at
</span><br>
<span class="quotelev1">&gt;                      *_CNR-INSEAN_*
</span><br>
<span class="quotelev1">&gt;             &lt;<a href="http://www.insean.cnr.it/en/__content/cnr-insean">http://www.insean.cnr.it/en/__content/cnr-insean</a>
</span><br>
<span class="quotelev1">&gt;             &lt;<a href="http://www.insean.cnr.it/en/content/cnr-insean">http://www.insean.cnr.it/en/content/cnr-insean</a>&gt;&gt;
</span><br>
<span class="quotelev1">&gt;                      The Italian Ship Model Basin
</span><br>
<span class="quotelev1">&gt;             (+39) 06.50299297 &lt;tel:%28%2B39%29%2006.50299297&gt; (Office)
</span><br>
<span class="quotelev1">&gt;                      My codes:
</span><br>
<span class="quotelev1">&gt;                      *_OFF_* &lt;<a href="https://github.com/szaghi/OFF">https://github.com/szaghi/OFF</a>__&gt;, Open
</span><br>
<span class="quotelev1">&gt;             source Finite
</span><br>
<span class="quotelev1">&gt;                      volumes Fluid dynamics code
</span><br>
<span class="quotelev1">&gt;                      *_Lib_VTK_IO_*
</span><br>
<span class="quotelev1">&gt;             &lt;<a href="https://github.com/szaghi/__Lib_VTK_IO">https://github.com/szaghi/__Lib_VTK_IO</a>
</span><br>
<span class="quotelev1">&gt;             &lt;<a href="https://github.com/szaghi/Lib_VTK_IO">https://github.com/szaghi/Lib_VTK_IO</a>&gt;&gt;, a
</span><br>
<span class="quotelev1">&gt;                      Fortran library to write and read data conforming
</span><br>
<span class="quotelev1">&gt;             the VTK standard
</span><br>
<span class="quotelev1">&gt;                      *_IR_Precision_*
</span><br>
<span class="quotelev1">&gt;             &lt;<a href="https://github.com/szaghi/IR___Precision">https://github.com/szaghi/IR___Precision</a>
</span><br>
<span class="quotelev1">&gt;             &lt;<a href="https://github.com/szaghi/IR_Precision">https://github.com/szaghi/IR_Precision</a>&gt;&gt;, a
</span><br>
<span class="quotelev1">&gt;                      Fortran (standard 2003) module to develop portable
</span><br>
<span class="quotelev1">&gt;             codes
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                      2013/6/21 &lt;_thomas.forde_at_[hidden]_
</span><br>
<span class="quotelev1">&gt;             &lt;mailto:thomas.forde_at_ulstein.__com
</span><br>
<span class="quotelev1">&gt;             &lt;mailto:thomas.forde_at_[hidden]&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;                      hi Stefano
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                      your error message show that you are missing a
</span><br>
<span class="quotelev1">&gt;             shared library,
</span><br>
<span class="quotelev1">&gt;                      not necessary that library path is wrong.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                      do you actually have libimf.so, can you find the
</span><br>
<span class="quotelev1">&gt;             file on your
</span><br>
<span class="quotelev1">&gt;                      system.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                      ./Thomas
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                      From: Stefano Zaghi &lt;_stefano.zaghi_at_[hidden]_
</span><br>
<span class="quotelev1">&gt;             &lt;mailto:stefano.zaghi_at_gmail.__com
</span><br>
<span class="quotelev1">&gt;             &lt;mailto:stefano.zaghi_at_[hidden]&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;                      To: _users_at_[hidden]_ &lt;mailto:users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;             &lt;mailto:users_at_[hidden]&gt;&gt;,
</span><br>
<span class="quotelev1">&gt;                      Date: 21.06.2013 09 &lt;tel:21.06.2013%2009&gt;:27
</span><br>
<span class="quotelev1">&gt;                      Subject: [OMPI users] OpenMPI 1.6.4 and Intel
</span><br>
<span class="quotelev1">&gt;                      Composer_xe_2013.4.183: problem with remote runs,
</span><br>
<span class="quotelev1">&gt;             orted: error
</span><br>
<span class="quotelev1">&gt;                      while loading shared libraries: libimf.so
</span><br>
<span class="quotelev1">&gt;                      Sent by: _users-bounces_at_[hidden]_
</span><br>
<span class="quotelev1">&gt;             &lt;mailto:users-bounces_at_open-__mpi.org
</span><br>
<span class="quotelev1">&gt;             &lt;mailto:users-bounces_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             ------------------------------__------------------------------__------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                      Dear All,
</span><br>
<span class="quotelev1">&gt;                      I have compiled OpenMPI 1.6.4 with Intel
</span><br>
<span class="quotelev1">&gt;             Composer_xe_2013.4.183.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                      My configure is:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                      ./configure
</span><br>
<span class="quotelev1">&gt;             --prefix=/home/stefano/opt/__mpi/openmpi/1.6.4/intel
</span><br>
<span class="quotelev1">&gt;                      CC=icc CXX=icpc F77=ifort FC=ifort
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                      Intel Composer has been installed in:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             /home/stefano/opt/intel/2013.__4.183/composer_xe_2013.4.183
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                      Into the .bashrc and .profile in all nodes there is:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                      source
</span><br>
<span class="quotelev1">&gt;             /home/stefano/opt/intel/2013.__4.183/bin/compilervars.sh
</span><br>
<span class="quotelev1">&gt;                      intel64
</span><br>
<span class="quotelev1">&gt;                      export MPI=/home/stefano/opt/mpi/__openmpi/1.6.4/intel
</span><br>
<span class="quotelev1">&gt;                      export PATH=${MPI}/bin:$PATH
</span><br>
<span class="quotelev1">&gt;                      export
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             LD_LIBRARY_PATH=${MPI}/lib/__openmpi:${MPI}/lib:$LD___LIBRARY_PATH
</span><br>
<span class="quotelev1">&gt;                      export
</span><br>
<span class="quotelev1">&gt;             LD_RUN_PATH=${MPI}/lib/__openmpi:${MPI}/lib:$LD_RUN___PATH
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                      If I run parallel job into each single node (e.g.
</span><br>
<span class="quotelev1">&gt;             mpirun -np 8
</span><br>
<span class="quotelev1">&gt;                      myprog) all works well. However, when I tried to
</span><br>
<span class="quotelev1">&gt;             run parallel
</span><br>
<span class="quotelev1">&gt;                      job in more nodes of the cluster (remote runs) like the
</span><br>
<span class="quotelev1">&gt;                      following:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                      mpirun -np 16 --bynode --machinefile nodi.txt -x
</span><br>
<span class="quotelev1">&gt;                      LD_LIBRARY_PATH -x LD_RUN_PATH myprog
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                      I got the following error:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             /home/stefano/opt/mpi/openmpi/__1.6.4/intel/bin/orted: error
</span><br>
<span class="quotelev1">&gt;                      while loading shared libraries: libimf.so: cannot
</span><br>
<span class="quotelev1">&gt;             open shared
</span><br>
<span class="quotelev1">&gt;                      object file: No such file or directory
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                      I have read many FAQs and online resources, all
</span><br>
<span class="quotelev1">&gt;             indicating
</span><br>
<span class="quotelev1">&gt;                      LD_LIBRARY_PATH as the possible problem (wrong
</span><br>
<span class="quotelev1">&gt;             setting).
</span><br>
<span class="quotelev1">&gt;                      However I am not able to figure out what is going
</span><br>
<span class="quotelev1">&gt;             wrong, the
</span><br>
<span class="quotelev1">&gt;                      LD_LIBRARY_PATH seems to set right in all nodes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                      It is worth noting that in the same cluster I have
</span><br>
<span class="quotelev1">&gt;             successful
</span><br>
<span class="quotelev1">&gt;                      installed OpenMPI 1.4.3 with Intel
</span><br>
<span class="quotelev1">&gt;             Composer_xe_2011_sp1.6.233
</span><br>
<span class="quotelev1">&gt;                      following exactly the same procedure.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                      Thank you in advance for all suggestion,
</span><br>
<span class="quotelev1">&gt;                      sincerely
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                      Stefano Zaghi
</span><br>
<span class="quotelev1">&gt;                      Ph.D. Aerospace Engineer,
</span><br>
<span class="quotelev1">&gt;                      Research Scientist, Dept. of Computational
</span><br>
<span class="quotelev1">&gt;             Hydrodynamics at
</span><br>
<span class="quotelev1">&gt;                      *_CNR-INSEAN_*
</span><br>
<span class="quotelev1">&gt;             &lt;<a href="http://www.insean.cnr.it/en/__content/cnr-insean">http://www.insean.cnr.it/en/__content/cnr-insean</a>
</span><br>
<span class="quotelev1">&gt;             &lt;<a href="http://www.insean.cnr.it/en/content/cnr-insean">http://www.insean.cnr.it/en/content/cnr-insean</a>&gt;&gt;
</span><br>
<span class="quotelev1">&gt;                      The Italian Ship Model Basin
</span><br>
<span class="quotelev1">&gt;             (+39) 06.50299297 &lt;tel:%28%2B39%29%2006.50299297&gt; (Office)
</span><br>
<span class="quotelev1">&gt;                      My codes: _
</span><br>
<span class="quotelev1">&gt;                      _*_OFF_* &lt;<a href="https://github.com/szaghi/OFF">https://github.com/szaghi/OFF</a>__&gt;, Open
</span><br>
<span class="quotelev1">&gt;             source Finite
</span><br>
<span class="quotelev1">&gt;                      volumes Fluid dynamics code _
</span><br>
<span class="quotelev1">&gt;                      _*_Lib_VTK_IO_*
</span><br>
<span class="quotelev1">&gt;             &lt;<a href="https://github.com/szaghi/__Lib_VTK_IO">https://github.com/szaghi/__Lib_VTK_IO</a>
</span><br>
<span class="quotelev1">&gt;             &lt;<a href="https://github.com/szaghi/Lib_VTK_IO">https://github.com/szaghi/Lib_VTK_IO</a>&gt;&gt;, a
</span><br>
<span class="quotelev1">&gt;                      Fortran library to write and read data conforming
</span><br>
<span class="quotelev1">&gt;             the VTK
</span><br>
<span class="quotelev1">&gt;                      standard
</span><br>
<span class="quotelev1">&gt;                      *_IR_Precision_*
</span><br>
<span class="quotelev1">&gt;             &lt;<a href="https://github.com/szaghi/IR___Precision">https://github.com/szaghi/IR___Precision</a>
</span><br>
<span class="quotelev1">&gt;             &lt;<a href="https://github.com/szaghi/IR_Precision">https://github.com/szaghi/IR_Precision</a>&gt;&gt;, a
</span><br>
<span class="quotelev1">&gt;                      Fortran (standard 2003) module to develop portable
</span><br>
<span class="quotelev1">&gt;                      codes_________________________________________________
</span><br>
<span class="quotelev1">&gt;                      users mailing list_
</span><br>
<span class="quotelev1">&gt;                      __users_at_[hidden]_ &lt;mailto:users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;             &lt;mailto:users_at_[hidden]&gt;&gt;_
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             __<a href="http://www.open-mpi.org/__mailman/listinfo.cgi/users">http://www.open-mpi.org/__mailman/listinfo.cgi/users</a>_
</span><br>
<span class="quotelev1">&gt;             &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>_&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                      Denne e-posten kan innehalde informasjon som er
</span><br>
<span class="quotelev1">&gt;             konfidensiell
</span><br>
<span class="quotelev1">&gt;                      og/eller underlagt lovbestemt teieplikt. Kun den
</span><br>
<span class="quotelev1">&gt;             tiltenkte
</span><br>
<span class="quotelev1">&gt;                      adressat har adgang
</span><br>
<span class="quotelev1">&gt;                      til &#229; lese eller vidareformidle denne e-posten eller
</span><br>
<span class="quotelev1">&gt;                      tilh&#248;yrande vedlegg. Dersom De ikkje er den tiltenkte
</span><br>
<span class="quotelev1">&gt;                      mottakar, vennligst kontakt avsendar pr e-post,
</span><br>
<span class="quotelev1">&gt;             slett denne
</span><br>
<span class="quotelev1">&gt;                      e-posten med vedlegg og makuler samtlige utskrifter
</span><br>
<span class="quotelev1">&gt;             og kopiar
</span><br>
<span class="quotelev1">&gt;                      av den.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                      This e-mail may contain confidential information,
</span><br>
<span class="quotelev1">&gt;             or otherwise
</span><br>
<span class="quotelev1">&gt;                      be protected against unauthorised use. Any disclosure,
</span><br>
<span class="quotelev1">&gt;                      distribution or other use of the information by
</span><br>
<span class="quotelev1">&gt;             anyone but the
</span><br>
<span class="quotelev1">&gt;                      intended recipient is strictly prohibited.
</span><br>
<span class="quotelev1">&gt;                      If you have received this e-mail in error, please
</span><br>
<span class="quotelev1">&gt;             advise the
</span><br>
<span class="quotelev1">&gt;                      sender by immediate reply and destroy the received
</span><br>
<span class="quotelev1">&gt;             documents
</span><br>
<span class="quotelev1">&gt;                      and any copies hereof.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                      PBefore
</span><br>
<span class="quotelev1">&gt;                      printing, think about the environment
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                      _________________________________________________
</span><br>
<span class="quotelev1">&gt;                      users mailing list_
</span><br>
<span class="quotelev1">&gt;                      __users_at_[hidden]_ &lt;mailto:users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;             &lt;mailto:users_at_[hidden]&gt;&gt;_
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             __<a href="http://www.open-mpi.org/__mailman/listinfo.cgi/users">http://www.open-mpi.org/__mailman/listinfo.cgi/users</a>_
</span><br>
<span class="quotelev1">&gt;             &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>_&gt;
</span><br>
<span class="quotelev1">&gt;                      _________________________________________________
</span><br>
<span class="quotelev1">&gt;                      users mailing list
</span><br>
<span class="quotelev1">&gt;             users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;             &lt;mailto:users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev1">&gt;             <a href="http://www.open-mpi.org/__mailman/listinfo.cgi/users">http://www.open-mpi.org/__mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;             &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                      Denne e-posten kan innehalde informasjon som er
</span><br>
<span class="quotelev1">&gt;             konfidensiell
</span><br>
<span class="quotelev1">&gt;                      og/eller underlagt lovbestemt teieplikt. Kun den
</span><br>
<span class="quotelev1">&gt;             tiltenkte
</span><br>
<span class="quotelev1">&gt;                      adressat har adgang
</span><br>
<span class="quotelev1">&gt;                      til &#229; lese eller vidareformidle denne e-posten eller
</span><br>
<span class="quotelev1">&gt;                      tilh&#248;yrande vedlegg. Dersom De ikkje er den tiltenkte
</span><br>
<span class="quotelev1">&gt;                      mottakar, vennligst kontakt avsendar pr e-post,
</span><br>
<span class="quotelev1">&gt;             slett denne
</span><br>
<span class="quotelev1">&gt;                      e-posten med vedlegg og makuler samtlige utskrifter
</span><br>
<span class="quotelev1">&gt;             og kopiar
</span><br>
<span class="quotelev1">&gt;                      av den.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                      This e-mail may contain confidential information,
</span><br>
<span class="quotelev1">&gt;             or otherwise
</span><br>
<span class="quotelev1">&gt;                      be protected against unauthorised use. Any disclosure,
</span><br>
<span class="quotelev1">&gt;                      distribution or other use of the information by
</span><br>
<span class="quotelev1">&gt;             anyone but the
</span><br>
<span class="quotelev1">&gt;                      intended recipient is strictly prohibited.
</span><br>
<span class="quotelev1">&gt;                      If you have received this e-mail in error, please
</span><br>
<span class="quotelev1">&gt;             advise the
</span><br>
<span class="quotelev1">&gt;                      sender by immediate reply and destroy the received
</span><br>
<span class="quotelev1">&gt;             documents
</span><br>
<span class="quotelev1">&gt;                      and any copies hereof.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                      PBefore
</span><br>
<span class="quotelev1">&gt;                      printing, think about the environment
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                      _________________________________________________
</span><br>
<span class="quotelev1">&gt;                      users mailing list
</span><br>
<span class="quotelev1">&gt;             users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;             &lt;mailto:users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev1">&gt;             <a href="http://www.open-mpi.org/__mailman/listinfo.cgi/users">http://www.open-mpi.org/__mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;             &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                  _________________________________________________
</span><br>
<span class="quotelev1">&gt;                  users mailing list
</span><br>
<span class="quotelev1">&gt;             users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;             &lt;mailto:users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;             &lt;mailto:users_at_[hidden]&gt;&gt;htt__p://www.open-mpi.org/mailman/__listinfo.cgi/users
</span><br>
<span class="quotelev1">&gt;             &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;              Denne e-posten kan innehalde informasjon som er konfidensiell
</span><br>
<span class="quotelev1">&gt;              og/eller underlagt lovbestemt teieplikt. Kun den tiltenkte
</span><br>
<span class="quotelev1">&gt;         adressat
</span><br>
<span class="quotelev1">&gt;              har adgang til &#229; lese eller vidareformidle denne e-posten eller
</span><br>
<span class="quotelev1">&gt;              tilh&#248;yrande vedlegg. Dersom De ikkje er den tiltenkte mottakar,
</span><br>
<span class="quotelev1">&gt;              vennligst kontakt avsendar pr e-post, slett denne e-posten med
</span><br>
<span class="quotelev1">&gt;              vedlegg og makuler samtlige utskrifter og kopiar av den.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;              This e-mail may contain confidential information, or
</span><br>
<span class="quotelev1">&gt;         otherwise be
</span><br>
<span class="quotelev1">&gt;              protected against unauthorised use. Any disclosure,
</span><br>
<span class="quotelev1">&gt;         distribution or
</span><br>
<span class="quotelev1">&gt;              other use of the information by anyone but the intended
</span><br>
<span class="quotelev1">&gt;         recipient is
</span><br>
<span class="quotelev1">&gt;              strictly prohibited. If you have received this e-mail in error,
</span><br>
<span class="quotelev1">&gt;              please advise the sender by immediate reply and destroy the
</span><br>
<span class="quotelev1">&gt;         received
</span><br>
<span class="quotelev1">&gt;              documents and any copies hereof.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;              PBefore printing, think about the environment
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;              _________________________________________________
</span><br>
<span class="quotelev1">&gt;              users mailing list
</span><br>
<span class="quotelev1">&gt;         users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;         &lt;mailto:users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev1">&gt;         <a href="http://www.open-mpi.org/__mailman/listinfo.cgi/users">http://www.open-mpi.org/__mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;         &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         _________________________________________________
</span><br>
<span class="quotelev1">&gt;         users mailing list
</span><br>
<span class="quotelev1">&gt;         users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;         <a href="http://www.open-mpi.org/__mailman/listinfo.cgi/users">http://www.open-mpi.org/__mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;         &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     _________________________________________________
</span><br>
<span class="quotelev1">&gt;     users mailing list
</span><br>
<span class="quotelev1">&gt;     users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/__mailman/listinfo.cgi/users">http://www.open-mpi.org/__mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;     &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
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
<li><strong>Next message:</strong> <a href="22189.php">Jeff Squyres (jsquyres): "Re: [OMPI users] New Cluster Centos 6.4 with Openmpi 1.6.4"</a>
<li><strong>Previous message:</strong> <a href="22187.php">Stefano Zaghi: "Re: [OMPI users] OpenMPI 1.6.4 and Intel Composer_xe_2013.4.183: problem with remote runs, orted: error while loading shared libraries: libimf.so"</a>
<li><strong>In reply to:</strong> <a href="22186.php">Stefano Zaghi: "Re: [OMPI users] OpenMPI 1.6.4 and Intel Composer_xe_2013.4.183: problem with remote runs, orted: error while loading shared libraries: libimf.so"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22211.php">Stefano Zaghi: "Re: [OMPI users] OpenMPI 1.6.4 and Intel Composer_xe_2013.4.183: problem with remote runs, orted: error while loading shared libraries: libimf.so"</a>
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
