<?
$subject_val = "Re: [OMPI users] Cannot open configuration file - openmpi/mpic++-wrapper-data.txt";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec  9 04:11:50 2014" -->
<!-- isoreceived="20141209091150" -->
<!-- sent="Tue, 9 Dec 2014 14:41:28 +0530" -->
<!-- isosent="20141209091128" -->
<!-- name="Manoj Vaghela" -->
<!-- email="manoj.vaghela_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Cannot open configuration file - openmpi/mpic++-wrapper-data.txt" -->
<!-- id="CAJfsQWShzTMEVaM10iNiRXGoBQ0dNYYduUujX2qibdEL4xGtMg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CBAF4CB2-E33C-431B-9674-28433266183B_at_staff.uni-marburg.de" -->
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
<strong>From:</strong> Manoj Vaghela (<em>manoj.vaghela_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-12-09 04:11:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25934.php">Faraj, Daniel A: "[OMPI users] open mpi and MLX"</a>
<li><strong>Previous message:</strong> <a href="25932.php">Reuti: "Re: [OMPI users] Cannot open configuration file - openmpi/mpic++-wrapper-data.txt"</a>
<li><strong>In reply to:</strong> <a href="25932.php">Reuti: "Re: [OMPI users] Cannot open configuration file - openmpi/mpic++-wrapper-data.txt"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Reuti,
<br>
<p>Thanks for your quick help.
<br>
<p>It works as required when setting OPAL_PREFIX variable to the current
<br>
installation path.
<br>
<p>Thanks once again.
<br>
<p><pre>
--
regards,
Manoj Vaghela
On Tue, Dec 9, 2014 at 1:50 PM, Reuti &lt;reuti_at_[hidden]&gt; wrote:
&gt; Hi,
&gt;
&gt; please have a look here:
&gt;
&gt; <a href="http://www.open-mpi.org/faq/?category=building#installdirs">http://www.open-mpi.org/faq/?category=building#installdirs</a>
&gt;
&gt; -- Reuti
&gt;
&gt;
&gt; Am 09.12.2014 um 07:26 schrieb Manoj Vaghela:
&gt;
&gt; Hi OpenMPI Users,
&gt;
&gt; I am trying to build OpenMPI libraries using standard configuration and
&gt; compile procedure. It is just the one thing that I want to install all in a
&gt; user specified path like following:
&gt;
&gt; OMPI_DIR is something like $HOME/Shared_Build/openmpi-1.8.3
&gt;
&gt; [OMPI_DIR] $ ./configure --prefix=$PWD/linux_x64
&gt;
&gt; It all went successfully and it installed all in the path above.
&gt;
&gt; I then moved the linux_x64 folder to location $HOME/mpi/openmpi/1.8.3.
&gt; Now the path of installation is $HOME/mpi/openmpi/1.8.3/linux_x64
&gt;
&gt; I added PATH and LD_LIBRARY_PATH as below:
&gt;
&gt; export PATH=$HOME/mpi/openmpi/1.8.3/linux_x64/bin:$PATH
&gt; export LD_LIBRARY_PATH=$HOME/mpi/openmpi/1.8.3/linux_x64/lib
&gt;
&gt; which when using mpic++ command gives following:
&gt;
&gt; Cannot open configuration file
&gt; /home/manoj//linux_x64/share/openmpi/mpic++-wrapper-data.txt
&gt; Error parsing data file mpic++: Not found
&gt;
&gt; This shows the OLD installation path for which --prefix was specified. Now
&gt; the installation folder moved to NEW path. But still searches the same OLD
&gt; location.
&gt;
&gt; I searched on the web, but with that info (./configure --with-devel-headers
&gt; --enable-binaries did not work and gave the same issue)
&gt;
&gt; This question may be a repeat but please experts guide me. I also will
&gt; need to copy linux_x64 folder to other similar machine from which these
&gt; libraries can be used to compile and run application without compiling the
&gt; whole source code.
&gt;
&gt; Thanks.
&gt;
&gt; --
&gt; regards,
&gt; Manoj
&gt;
&gt;
&gt;
&gt; _______________________________________________
&gt; users mailing list
&gt; users_at_[hidden]
&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt; Link to this post:
&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/12/25931.php">http://www.open-mpi.org/community/lists/users/2014/12/25931.php</a>
&gt;
&gt;
&gt;
&gt; _______________________________________________
&gt; users mailing list
&gt; users_at_[hidden]
&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt; Link to this post:
&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/12/25932.php">http://www.open-mpi.org/community/lists/users/2014/12/25932.php</a>
&gt;
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-25933/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25934.php">Faraj, Daniel A: "[OMPI users] open mpi and MLX"</a>
<li><strong>Previous message:</strong> <a href="25932.php">Reuti: "Re: [OMPI users] Cannot open configuration file - openmpi/mpic++-wrapper-data.txt"</a>
<li><strong>In reply to:</strong> <a href="25932.php">Reuti: "Re: [OMPI users] Cannot open configuration file - openmpi/mpic++-wrapper-data.txt"</a>
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
