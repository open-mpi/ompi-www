<?
$subject_val = "Re: [OMPI users] error while loading shared libraries: libhdf5.so.7:";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb  7 12:53:13 2013" -->
<!-- isoreceived="20130207175313" -->
<!-- sent="Thu, 7 Feb 2013 22:53:00 +0500" -->
<!-- isosent="20130207175300" -->
<!-- name="Syed Ahsan Ali" -->
<!-- email="ahsanshah01_at_[hidden]" -->
<!-- subject="Re: [OMPI users] error while loading shared libraries: libhdf5.so.7:" -->
<!-- id="CAMvdAsJ2zi67wj96d+biB=3Pkp4nhAJTKJWkLLSS-SCCRZCdwQ_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAMvdAsJPWFet9DzEghMHmdDX=MiR+C1WUH3FJ2kz-WWkzfSK8Q_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] error while loading shared libraries: libhdf5.so.7:<br>
<strong>From:</strong> Syed Ahsan Ali (<em>ahsanshah01_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-02-07 12:53:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21330.php">Gus Correa: "Re: [OMPI users] error while loading shared libraries: libhdf5.so.7:"</a>
<li><strong>Previous message:</strong> <a href="21328.php">Eugene Loh: "Re: [OMPI users] I have still a problem with rankfiles in openmpi-1.6.4rc3"</a>
<li><strong>In reply to:</strong> <a href="21327.php">Syed Ahsan Ali: "Re: [OMPI users] error while loading shared libraries: libhdf5.so.7:"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21330.php">Gus Correa: "Re: [OMPI users] error while loading shared libraries: libhdf5.so.7:"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear John
<br>
Looking into output of ldd for master and compute nodes solved my problem.
<br>
Thanks for such a simple solution. :)
<br>
<p>On Thu, Feb 7, 2013 at 9:37 PM, Syed Ahsan Ali &lt;ahsanshah01_at_[hidden]&gt;wrote:
<br>
<p><span class="quotelev1">&gt; Dear John
</span><br>
<span class="quotelev1">&gt; Thanks for the reply. I'll need help of you people to solve this problem.
</span><br>
<span class="quotelev1">&gt; I am not expert in HPC and this would be my learning as well. Let me add
</span><br>
<span class="quotelev1">&gt; that the cluster is based on Platform Cluster Manager (PCM) by IBM
</span><br>
<span class="quotelev1">&gt; Computing. The compute nodes are NFS mounted with the installer node.
</span><br>
<span class="quotelev1">&gt; Therefore the directory containing binary rca.x is also present in the
</span><br>
<span class="quotelev1">&gt; compute nodes. Unfortunately I was trying to copy gfortran libraries from
</span><br>
<span class="quotelev1">&gt; installer node to compute nodes using rsync but something went wrong and
</span><br>
<span class="quotelev1">&gt; the model binary rca.x stopped working. I have recompiled the binary after
</span><br>
<span class="quotelev1">&gt; reinstalling hdf as well as netcdf which model uses during compilation. All
</span><br>
<span class="quotelev1">&gt; path are set in bashrc as well.
</span><br>
<span class="quotelev1">&gt; Below is the output of ldd on master as well as compute nodes
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [pmdtest_at_pmd HadGEM]$ ldd rca.x
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; libstdc++.so.6 =&gt; /usr/local/lib64/libstdc++.so.6 (0x00002b6a9503c000)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; libnetcdff.so.5 =&gt; /usr/local/lib/libnetcdff.so.5 (0x00002b6a95344000)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; libnetcdf.so.7 =&gt; /usr/local/lib/libnetcdf.so.7 (0x00002b6a95798000)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; libhdf5.so.7 =&gt; /usr/local/lib/libhdf5.so.7 (0x00002b6a95aa1000)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; libhdf5_hl.so.7 =&gt; /usr/local/lib/libhdf5_hl.so.7 (0x00002b6a95f5c000)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; libsz.so.2 =&gt; /usr/local/lib/libsz.so.2 (0x00002b6a9618b000)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; libz.so.1 =&gt; /usr/local/lib/libz.so.1 (0x00002b6a9639f000)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; libmpi_f90.so.0 =&gt; /home/openmpi/lib/libmpi_f90.so.0 (0x00002b6a965b4000)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; libmpi_f77.so.0 =&gt; /home/openmpi/lib/libmpi_f77.so.0 (0x00002b6a967b7000)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; libmpi.so.0 =&gt; /home/openmpi/lib/libmpi.so.0 (0x00002b6a969ee000)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; libopen-rte.so.0 =&gt; /home/openmpi/lib/libopen-rte.so.0 (0x00002b6a96cb6000)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; libopen-pal.so.0 =&gt; /home/openmpi/lib/libopen-pal.so.0 (0x00002b6a96f16000)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; libdl.so.2 =&gt; /lib64/libdl.so.2 (0x00000033e0e00000)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; libnsl.so.1 =&gt; /lib64/libnsl.so.1 (0x00000033e2200000)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; libutil.so.1 =&gt; /lib64/libutil.so.1 (0x00000033ee400000)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; libm.so.6 =&gt; /lib64/libm.so.6 (0x00000033e1200000)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; libpthread.so.0 =&gt; /lib64/libpthread.so.0 (0x00000033e1600000)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; libc.so.6 =&gt; /lib64/libc.so.6 (0x00000033e0a00000)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; libgcc_s.so.1 =&gt; /usr/local/lib64/libgcc_s.so.1 (0x00002b6a971a0000)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /lib64/ld-linux-x86-64.so.2 (0x00000033e0600000)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; librt.so.1 =&gt; /lib64/librt.so.1 (0x000000362ac00000)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; libifport.so.5 =&gt; /opt/intel/Compiler/11.1/064/lib/intel64/libifport.so.5
</span><br>
<span class="quotelev1">&gt; (0x00002b6a973b5000)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; libifcore.so.5 =&gt; /opt/intel/Compiler/11.1/064/lib/intel64/libifcore.so.5
</span><br>
<span class="quotelev1">&gt; (0x00002b6a974ef000)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; libimf.so =&gt;
</span><br>
<span class="quotelev1">&gt; /opt/intel/composer_xe_2013.0.079/compiler/lib/intel64/libimf.so
</span><br>
<span class="quotelev1">&gt; (0x00002b6a97765000)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; libsvml.so =&gt;
</span><br>
<span class="quotelev1">&gt; /opt/intel/composer_xe_2013.0.079/compiler/lib/intel64/libsvml.so
</span><br>
<span class="quotelev1">&gt; (0x00002b6a97c2f000)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; libintlc.so.5 =&gt;
</span><br>
<span class="quotelev1">&gt; /opt/intel/composer_xe_2013.0.079/compiler/lib/intel64/libintlc.so.5
</span><br>
<span class="quotelev1">&gt; (0x00002b6a984f5000)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; libifcoremt.so.5 =&gt;
</span><br>
<span class="quotelev1">&gt; /opt/intel/Compiler/11.1/064/lib/intel64/libifcoremt.so.5
</span><br>
<span class="quotelev1">&gt; (0x00002b6a98743000)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; libirng.so =&gt;
</span><br>
<span class="quotelev1">&gt; /opt/intel/composer_xe_2013.0.079/compiler/lib/intel64/libirng.so
</span><br>
<span class="quotelev1">&gt; (0x00002b6a989e8000)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [pmdtest_at_pmd HadGEM]$ ssh compute-01-18
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ssh: connect to host compute-01-18 port 22: No route to host
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [pmdtest_at_pmd HadGEM]$ ssh compute-01-13
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Last login: Mon Jan 28 07:48:08 2013 from pmd-eth0.private.dns.zone
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [pmdtest_at_compute-01-13 ~]$ ldd rca.x
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ldd: ./rca.x: No such file or directory
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [pmdtest_at_compute-01-13 ~]$ ls
</span><br>
<span class="quotelev1">&gt; /home/pmdtest/RCA4_CORDEX/RCA4_CORDEX_SAsia/HadGEM/rca.x
</span><br>
<span class="quotelev1">&gt; Regards
</span><br>
<span class="quotelev1">&gt; Ahsan
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  On Thu, Feb 7, 2013 at 7:40 PM, John Hearns &lt;hearnsj_at_[hidden]&gt;wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  ldd rca.x
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Try logging in to each node and run this command.
</span><br>
<span class="quotelev2">&gt;&gt; Even better use pdsh
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
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><pre>
-- 
Syed Ahsan Ali Bokhari
Electronic Engineer (EE)
Research &amp; Development Division
Pakistan Meteorological Department H-8/4, Islamabad.
Phone # off  +92518358714
Cell # +923155145014
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-21329/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21330.php">Gus Correa: "Re: [OMPI users] error while loading shared libraries: libhdf5.so.7:"</a>
<li><strong>Previous message:</strong> <a href="21328.php">Eugene Loh: "Re: [OMPI users] I have still a problem with rankfiles in openmpi-1.6.4rc3"</a>
<li><strong>In reply to:</strong> <a href="21327.php">Syed Ahsan Ali: "Re: [OMPI users] error while loading shared libraries: libhdf5.so.7:"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21330.php">Gus Correa: "Re: [OMPI users] error while loading shared libraries: libhdf5.so.7:"</a>
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
