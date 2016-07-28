<?
$subject_val = "Re: [OMPI users] Cannot open configuration file - openmpi/mpic++-wrapper-data.txt";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec  9 03:20:16 2014" -->
<!-- isoreceived="20141209082016" -->
<!-- sent="Tue, 9 Dec 2014 09:20:03 +0100" -->
<!-- isosent="20141209082003" -->
<!-- name="Reuti" -->
<!-- email="reuti_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Cannot open configuration file - openmpi/mpic++-wrapper-data.txt" -->
<!-- id="CBAF4CB2-E33C-431B-9674-28433266183B_at_staff.uni-marburg.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAJfsQWRk0APCoaox0g3VA+qTPdofevO91JQxq1eQfBqS9znUQw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Cannot open configuration file - openmpi/mpic++-wrapper-data.txt<br>
<strong>From:</strong> Reuti (<em>reuti_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-12-09 03:20:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25933.php">Manoj Vaghela: "Re: [OMPI users] Cannot open configuration file - openmpi/mpic++-wrapper-data.txt"</a>
<li><strong>Previous message:</strong> <a href="25931.php">Manoj Vaghela: "[OMPI users] Cannot open configuration file - openmpi/mpic++-wrapper-data.txt"</a>
<li><strong>In reply to:</strong> <a href="25931.php">Manoj Vaghela: "[OMPI users] Cannot open configuration file - openmpi/mpic++-wrapper-data.txt"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25933.php">Manoj Vaghela: "Re: [OMPI users] Cannot open configuration file - openmpi/mpic++-wrapper-data.txt"</a>
<li><strong>Reply:</strong> <a href="25933.php">Manoj Vaghela: "Re: [OMPI users] Cannot open configuration file - openmpi/mpic++-wrapper-data.txt"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>please have a look here:
<br>
<p><a href="http://www.open-mpi.org/faq/?category=building#installdirs">http://www.open-mpi.org/faq/?category=building#installdirs</a>
<br>
<p>-- Reuti
<br>
<p><p>Am 09.12.2014 um 07:26 schrieb Manoj Vaghela:
<br>
<p><span class="quotelev1">&gt; Hi OpenMPI Users,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am trying to build OpenMPI libraries using standard configuration and compile procedure. It is just the one thing that I want to install all in a user specified path like following:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; OMPI_DIR is something like $HOME/Shared_Build/openmpi-1.8.3
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [OMPI_DIR] $ ./configure --prefix=$PWD/linux_x64
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It all went successfully and it installed all in the path above.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I then moved the linux_x64 folder to location $HOME/mpi/openmpi/1.8.3. Now the path of installation is $HOME/mpi/openmpi/1.8.3/linux_x64 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I added PATH and LD_LIBRARY_PATH as below:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; export PATH=$HOME/mpi/openmpi/1.8.3/linux_x64/bin:$PATH
</span><br>
<span class="quotelev1">&gt; export LD_LIBRARY_PATH=$HOME/mpi/openmpi/1.8.3/linux_x64/lib
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; which when using mpic++ command gives following:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Cannot open configuration file /home/manoj//linux_x64/share/openmpi/mpic++-wrapper-data.txt
</span><br>
<span class="quotelev1">&gt; Error parsing data file mpic++: Not found
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This shows the OLD installation path for which --prefix was specified. Now the installation folder moved to NEW path. But still searches the same OLD location.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I searched on the web, but with that info (./configure --with-devel-headers --enable-binaries did not work and gave the same issue)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This question may be a repeat but please experts guide me. I also will need to copy linux_x64 folder to other similar machine from which these libraries can be used to compile and run application without compiling the whole source code.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; regards,
</span><br>
<span class="quotelev1">&gt; Manoj
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
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/12/25931.php">http://www.open-mpi.org/community/lists/users/2014/12/25931.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-25932/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25933.php">Manoj Vaghela: "Re: [OMPI users] Cannot open configuration file - openmpi/mpic++-wrapper-data.txt"</a>
<li><strong>Previous message:</strong> <a href="25931.php">Manoj Vaghela: "[OMPI users] Cannot open configuration file - openmpi/mpic++-wrapper-data.txt"</a>
<li><strong>In reply to:</strong> <a href="25931.php">Manoj Vaghela: "[OMPI users] Cannot open configuration file - openmpi/mpic++-wrapper-data.txt"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25933.php">Manoj Vaghela: "Re: [OMPI users] Cannot open configuration file - openmpi/mpic++-wrapper-data.txt"</a>
<li><strong>Reply:</strong> <a href="25933.php">Manoj Vaghela: "Re: [OMPI users] Cannot open configuration file - openmpi/mpic++-wrapper-data.txt"</a>
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
