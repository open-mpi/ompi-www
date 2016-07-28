<?
$subject_val = "Re: [OMPI users] error while loading shared libraries: libhdf5.so.7:";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb  7 11:37:07 2013" -->
<!-- isoreceived="20130207163707" -->
<!-- sent="Thu, 7 Feb 2013 21:37:02 +0500" -->
<!-- isosent="20130207163702" -->
<!-- name="Syed Ahsan Ali" -->
<!-- email="ahsanshah01_at_[hidden]" -->
<!-- subject="Re: [OMPI users] error while loading shared libraries: libhdf5.so.7:" -->
<!-- id="CAMvdAsJPWFet9DzEghMHmdDX=MiR+C1WUH3FJ2kz-WWkzfSK8Q_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAPqNE2WruPyRHjeqFWphxZhJj8Yyd2Q4LXN_UYXdNUPSBT65KA_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2013-02-07 11:37:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21328.php">Eugene Loh: "Re: [OMPI users] I have still a problem with rankfiles in openmpi-1.6.4rc3"</a>
<li><strong>Previous message:</strong> <a href="21326.php">John Hearns: "Re: [OMPI users] error while loading shared libraries: libhdf5.so.7:"</a>
<li><strong>In reply to:</strong> <a href="21326.php">John Hearns: "Re: [OMPI users] error while loading shared libraries: libhdf5.so.7:"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21329.php">Syed Ahsan Ali: "Re: [OMPI users] error while loading shared libraries: libhdf5.so.7:"</a>
<li><strong>Reply:</strong> <a href="21329.php">Syed Ahsan Ali: "Re: [OMPI users] error while loading shared libraries: libhdf5.so.7:"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear John
<br>
Thanks for the reply. I'll need help of you people to solve this problem. I
<br>
am not expert in HPC and this would be my learning as well. Let me add that
<br>
the cluster is based on Platform Cluster Manager (PCM) by IBM Computing.
<br>
The compute nodes are NFS mounted with the installer node. Therefore the
<br>
directory containing binary rca.x is also present in the compute nodes.
<br>
Unfortunately I was trying to copy gfortran libraries from installer node
<br>
to compute nodes using rsync but something went wrong and the model binary
<br>
rca.x stopped working. I have recompiled the binary after reinstalling hdf
<br>
as well as netcdf which model uses during compilation. All path are set in
<br>
bashrc as well.
<br>
Below is the output of ldd on master as well as compute nodes
<br>
<p><p><p>[pmdtest_at_pmd HadGEM]$ ldd rca.x
<br>
<p>libstdc++.so.6 =&gt; /usr/local/lib64/libstdc++.so.6 (0x00002b6a9503c000)
<br>
<p>libnetcdff.so.5 =&gt; /usr/local/lib/libnetcdff.so.5 (0x00002b6a95344000)
<br>
<p>libnetcdf.so.7 =&gt; /usr/local/lib/libnetcdf.so.7 (0x00002b6a95798000)
<br>
<p>libhdf5.so.7 =&gt; /usr/local/lib/libhdf5.so.7 (0x00002b6a95aa1000)
<br>
<p>libhdf5_hl.so.7 =&gt; /usr/local/lib/libhdf5_hl.so.7 (0x00002b6a95f5c000)
<br>
<p>libsz.so.2 =&gt; /usr/local/lib/libsz.so.2 (0x00002b6a9618b000)
<br>
<p>libz.so.1 =&gt; /usr/local/lib/libz.so.1 (0x00002b6a9639f000)
<br>
<p>libmpi_f90.so.0 =&gt; /home/openmpi/lib/libmpi_f90.so.0 (0x00002b6a965b4000)
<br>
<p>libmpi_f77.so.0 =&gt; /home/openmpi/lib/libmpi_f77.so.0 (0x00002b6a967b7000)
<br>
<p>libmpi.so.0 =&gt; /home/openmpi/lib/libmpi.so.0 (0x00002b6a969ee000)
<br>
<p>libopen-rte.so.0 =&gt; /home/openmpi/lib/libopen-rte.so.0 (0x00002b6a96cb6000)
<br>
<p>libopen-pal.so.0 =&gt; /home/openmpi/lib/libopen-pal.so.0 (0x00002b6a96f16000)
<br>
<p>libdl.so.2 =&gt; /lib64/libdl.so.2 (0x00000033e0e00000)
<br>
<p>libnsl.so.1 =&gt; /lib64/libnsl.so.1 (0x00000033e2200000)
<br>
<p>libutil.so.1 =&gt; /lib64/libutil.so.1 (0x00000033ee400000)
<br>
<p>libm.so.6 =&gt; /lib64/libm.so.6 (0x00000033e1200000)
<br>
<p>libpthread.so.0 =&gt; /lib64/libpthread.so.0 (0x00000033e1600000)
<br>
<p>libc.so.6 =&gt; /lib64/libc.so.6 (0x00000033e0a00000)
<br>
<p>libgcc_s.so.1 =&gt; /usr/local/lib64/libgcc_s.so.1 (0x00002b6a971a0000)
<br>
<p>/lib64/ld-linux-x86-64.so.2 (0x00000033e0600000)
<br>
<p>librt.so.1 =&gt; /lib64/librt.so.1 (0x000000362ac00000)
<br>
<p>libifport.so.5 =&gt; /opt/intel/Compiler/11.1/064/lib/intel64/libifport.so.5
<br>
(0x00002b6a973b5000)
<br>
<p>libifcore.so.5 =&gt; /opt/intel/Compiler/11.1/064/lib/intel64/libifcore.so.5
<br>
(0x00002b6a974ef000)
<br>
<p>libimf.so =&gt;
<br>
/opt/intel/composer_xe_2013.0.079/compiler/lib/intel64/libimf.so
<br>
(0x00002b6a97765000)
<br>
<p>libsvml.so =&gt;
<br>
/opt/intel/composer_xe_2013.0.079/compiler/lib/intel64/libsvml.so
<br>
(0x00002b6a97c2f000)
<br>
<p>libintlc.so.5 =&gt;
<br>
/opt/intel/composer_xe_2013.0.079/compiler/lib/intel64/libintlc.so.5
<br>
(0x00002b6a984f5000)
<br>
<p>libifcoremt.so.5 =&gt;
<br>
/opt/intel/Compiler/11.1/064/lib/intel64/libifcoremt.so.5
<br>
(0x00002b6a98743000)
<br>
<p>libirng.so =&gt;
<br>
/opt/intel/composer_xe_2013.0.079/compiler/lib/intel64/libirng.so
<br>
(0x00002b6a989e8000)
<br>
<p>[pmdtest_at_pmd HadGEM]$ ssh compute-01-18
<br>
<p>ssh: connect to host compute-01-18 port 22: No route to host
<br>
<p>[pmdtest_at_pmd HadGEM]$ ssh compute-01-13
<br>
<p>Last login: Mon Jan 28 07:48:08 2013 from pmd-eth0.private.dns.zone
<br>
<p>[pmdtest_at_compute-01-13 ~]$ ldd rca.x
<br>
<p>ldd: ./rca.x: No such file or directory
<br>
<p>[pmdtest_at_compute-01-13 ~]$ ls
<br>
/home/pmdtest/RCA4_CORDEX/RCA4_CORDEX_SAsia/HadGEM/rca.x
<br>
Regards
<br>
Ahsan
<br>
<p><p>On Thu, Feb 7, 2013 at 7:40 PM, John Hearns &lt;hearnsj_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; ldd rca.x
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Try logging in to each node and run this command.
</span><br>
<span class="quotelev1">&gt; Even better use pdsh
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-21327/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21328.php">Eugene Loh: "Re: [OMPI users] I have still a problem with rankfiles in openmpi-1.6.4rc3"</a>
<li><strong>Previous message:</strong> <a href="21326.php">John Hearns: "Re: [OMPI users] error while loading shared libraries: libhdf5.so.7:"</a>
<li><strong>In reply to:</strong> <a href="21326.php">John Hearns: "Re: [OMPI users] error while loading shared libraries: libhdf5.so.7:"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21329.php">Syed Ahsan Ali: "Re: [OMPI users] error while loading shared libraries: libhdf5.so.7:"</a>
<li><strong>Reply:</strong> <a href="21329.php">Syed Ahsan Ali: "Re: [OMPI users] error while loading shared libraries: libhdf5.so.7:"</a>
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
