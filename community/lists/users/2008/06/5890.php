<?
$subject_val = "Re: [OMPI users] gfortran bindings apparently not built on mac os leopard";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun 16 14:13:03 2008" -->
<!-- isoreceived="20080616181303" -->
<!-- sent="Mon, 16 Jun 2008 12:12:52 -0600" -->
<!-- isosent="20080616181252" -->
<!-- name="Weirs, V Gregory" -->
<!-- email="vgweirs_at_[hidden]" -->
<!-- subject="Re: [OMPI users] gfortran bindings apparently not built on mac os leopard" -->
<!-- id="C47C0944.5D51%vgweirs_at_sandia.gov" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="mailman.1399.1213635898.7809.users_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] gfortran bindings apparently not built on mac os leopard<br>
<strong>From:</strong> Weirs, V Gregory (<em>vgweirs_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-06-16 14:12:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5891.php">Jeff Squyres: "Re: [OMPI users] locked  memory problem"</a>
<li><strong>Previous message:</strong> <a href="5889.php">Tony Smith: "Re: [OMPI users] help me please, about Open MPI"</a>
<li><strong>Maybe in reply to:</strong> <a href="5883.php">Weirs, V Gregory: "[OMPI users] gfortran bindings apparently not built on mac os leopard"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5898.php">Jeff Squyres: "Re: [OMPI users] gfortran bindings apparently not built on mac os leopard"</a>
<li><strong>Reply:</strong> <a href="5898.php">Jeff Squyres: "Re: [OMPI users] gfortran bindings apparently not built on mac os leopard"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dave Gunter:
<br>
<p>According to ./configure -help, by default  -enable-mpi-f77 and -enable-mpi-f90 are set. Also, ompi_info (see output in run_output in the tarball) seems to indicate they are there. I rebuilt with them just to be sure, and got the same results.
<br>
<p><p>Doug Reeder:
<br>
In my run_output file, you can see results of 'which mpif77' that shows I am using the version I built. (current is a symlink to 1.2.6-gcc4.0). In any case, I get the same results with the absolute path /usr/local/openmpi/1.2.6-4.0/bin/mpif77.
<br>
<p><p>Thanks,
<br>
Greg
<br>
<p><p>On 6/16/08 11:04 AM, &quot;users-request_at_[hidden]&quot; &lt;users-request_at_[hidden]&gt; wrote:
<br>
<p>Send users mailing list submissions to
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;users_at_[hidden]
<br>
<p>To subscribe or unsubscribe via the World Wide Web, visit
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
or, via email, send a message with subject or body 'help' to
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;users-request_at_[hidden]
<br>
<p>You can reach the person managing the list at
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;users-owner_at_[hidden]
<br>
<p>When replying, please edit your Subject line so it is more specific
<br>
than &quot;Re: Contents of users digest...&quot;
<br>
<p><p>Today's Topics:
<br>
<p>&nbsp;&nbsp;&nbsp;1. Re: gfortran bindings apparently not built on mac os      leopard
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(David Gunter)
<br>
&nbsp;&nbsp;&nbsp;2. Re: gfortran bindings apparently not built on mac os      leopard
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(Doug Reeder)
<br>
&nbsp;&nbsp;&nbsp;3. Re: gfortran bindings apparently not built on mac os      leopard
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(Doug Reeder)
<br>
&nbsp;&nbsp;&nbsp;4. help me please, about Open MPI (Tony Smith)
<br>
&nbsp;&nbsp;&nbsp;5. Re: help me please, about Open MPI (Andreas Sch?fer)
<br>
<p><p>----------------------------------------------------------------------
<br>
<p>Message: 1
<br>
Date: Mon, 16 Jun 2008 10:37:22 -0600
<br>
From: David Gunter &lt;dog_at_[hidden]&gt;
<br>
Subject: Re: [OMPI users] gfortran bindings apparently not built on
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mac os  leopard
<br>
To: Open MPI Users &lt;users_at_[hidden]&gt;
<br>
Message-ID: &lt;4683C284-4FEF-45CA-A2BC-8BE91A439485_at_[hidden]&gt;
<br>
Content-Type: text/plain; charset=&quot;windows-1252&quot;; Format=&quot;flowed&quot;;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;DelSp=&quot;yes&quot;
<br>
<p>I believe you still must add &quot;--enable-f77&quot; and &quot;--enable-f90&quot; to the
<br>
OMPI configure line in addition to setting the FC and F77 env variables.
<br>
<p>-david
<br>
<pre>
--
David Gunter
HPC-3: Parallel Tools Team
Los Alamos National Laboratory
On Jun 16, 2008, at 10:25 AM, Weirs, V Gregory wrote:
&gt;
&gt;
&gt; I am having trouble building mpif77/mpif90 with gfortran on Mac OS
&gt; 10.5. Or maybe just running. The configure, make all, and make
&gt; install seemed to go just fine, finding my gfortran and apparently
&gt; using it, but the scripts mpif77 and mpif90 give the error that my
&gt; openmpi was not built with fortran bindings. Mpicc and mpicxx don?t
&gt; give this error.  Ompi_info says the f77 and f90 bindings were built.
&gt;
&gt; I know that OS X 10.5 comes with openmpi mpicc and mpicxx installed,
&gt; but not fortran bindings, and I was careful to put the openmpi I
&gt; built first in the path.
&gt;
&gt; Some run output (mpif77 ?version, ompi_info), config.log,
&gt; configure.log, make.out, make-install.out are in the attached tarball.
&gt;
&gt; Any clues?
&gt;
&gt; Thanks,
&gt; Greg
&gt;
&gt;
&gt; --
&gt; V. Gregory Weirs
&gt; Sandia National Laboratories                vgweirs_at_[hidden]
&gt; P.O.Box 5800, MS 0378                        phone: 505 845 2032
&gt; Albuquerque, NM 87185-0378              fax: 505 284 0154
&gt; &lt;dig.tar.gz&gt;_______________________________________________
&gt; users mailing list
&gt; users_at_[hidden]
&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
-------------- next part --------------
HTML attachment scrubbed and removed
------------------------------
Message: 2
Date: Mon, 16 Jun 2008 09:32:21 -0700
From: Doug Reeder &lt;dlr_at_[hidden]&gt;
Subject: Re: [OMPI users] gfortran bindings apparently not built on
        mac os  leopard
To: Open MPI Users &lt;users_at_[hidden]&gt;
Message-ID: &lt;5047581C-F2E2-473B-8576-3E11F0D54DEA_at_[hidden]&gt;
Content-Type: text/plain; charset=&quot;windows-1252&quot;; Format=&quot;flowed&quot;;
        DelSp=&quot;yes&quot;
Greg,
If you use the absolute path names to run your mpif77 and mpif90 what
output do you get. In spite of the results from which mpif77, the
outputs from mpif77 and mpif90 look suspiciously like the outputs
from the apple supplied versions in /usr/bin.
Doug Reeder
On Jun 16, 2008, at 9:25 AM, Weirs, V Gregory wrote:
&gt;
&gt;
&gt; I am having trouble building mpif77/mpif90 with gfortran on Mac OS
&gt; 10.5. Or maybe just running. The configure, make all, and make
&gt; install seemed to go just fine, finding my gfortran and apparently
&gt; using it, but the scripts mpif77 and mpif90 give the error that my
&gt; openmpi was not built with fortran bindings. Mpicc and mpicxx don?t
&gt; give this error.  Ompi_info says the f77 and f90 bindings were built.
&gt;
&gt; I know that OS X 10.5 comes with openmpi mpicc and mpicxx
&gt; installed, but not fortran bindings, and I was careful to put the
&gt; openmpi I built first in the path.
&gt;
&gt; Some run output (mpif77 ?version, ompi_info), config.log,
&gt; configure.log, make.out, make-install.out are in the attached tarball.
&gt;
&gt; Any clues?
&gt;
&gt; Thanks,
&gt; Greg
&gt;
&gt;
&gt; --
&gt; V. Gregory Weirs
&gt; Sandia National Laboratories                vgweirs_at_[hidden]
&gt; P.O.Box 5800, MS 0378                        phone: 505 845 2032
&gt; Albuquerque, NM 87185-0378              fax: 505 284 0154
&gt; &lt;dig.tar.gz&gt;
&gt; _______________________________________________
&gt; users mailing list
&gt; users_at_[hidden]
&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
-------------- next part --------------
HTML attachment scrubbed and removed
------------------------------
Message: 3
Date: Mon, 16 Jun 2008 09:42:55 -0700
From: Doug Reeder &lt;dlr_at_[hidden]&gt;
Subject: Re: [OMPI users] gfortran bindings apparently not built on
        mac os  leopard
To: Open MPI Users &lt;users_at_[hidden]&gt;
Message-ID: &lt;08B5C06D-8B64-4189-ADAE-E9FBE6BE567F_at_[hidden]&gt;
Content-Type: text/plain; charset=&quot;windows-1252&quot;; Format=&quot;flowed&quot;;
        DelSp=&quot;yes&quot;
Greg,
In your run_output file you don't appear to be using the openmpi
versions that you built. From your make-install.out file it looks
like your versions are in /usr/local/openmpi/1.2.6-gcc4.0/bin. You
need to use that absolute path or prepend that path to your PATH
environment variable.
Doug Reeder
On Jun 16, 2008, at 9:25 AM, Weirs, V Gregory wrote:
&gt;
&gt;
&gt; I am having trouble building mpif77/mpif90 with gfortran on Mac OS
&gt; 10.5. Or maybe just running. The configure, make all, and make
&gt; install seemed to go just fine, finding my gfortran and apparently
&gt; using it, but the scripts mpif77 and mpif90 give the error that my
&gt; openmpi was not built with fortran bindings. Mpicc and mpicxx don?t
&gt; give this error.  Ompi_info says the f77 and f90 bindings were built.
&gt;
&gt; I know that OS X 10.5 comes with openmpi mpicc and mpicxx
&gt; installed, but not fortran bindings, and I was careful to put the
&gt; openmpi I built first in the path.
&gt;
&gt; Some run output (mpif77 ?version, ompi_info), config.log,
&gt; configure.log, make.out, make-install.out are in the attached tarball.
&gt;
&gt; Any clues?
&gt;
&gt; Thanks,
&gt; Greg
&gt;
&gt;
&gt; --
&gt; V. Gregory Weirs
&gt; Sandia National Laboratories                vgweirs_at_[hidden]
&gt; P.O.Box 5800, MS 0378                        phone: 505 845 2032
&gt; Albuquerque, NM 87185-0378              fax: 505 284 0154
&gt; &lt;dig.tar.gz&gt;
&gt; _______________________________________________
&gt; users mailing list
&gt; users_at_[hidden]
&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
-------------- next part --------------
HTML attachment scrubbed and removed
------------------------------
Message: 4
Date: Mon, 16 Jun 2008 12:51:31 -0400
From: Tony Smith &lt;dtustudy8_at_[hidden]&gt;
Subject: [OMPI users] help me please, about Open MPI
To: &lt;users_at_[hidden]&gt;
Message-ID: &lt;BAY104-W32BC5D00DA99730856FD48FDA90_at_phx.gbl&gt;
Content-Type: text/plain; charset=&quot;windows-1252&quot;
Dear Sir:
I am trying to install Open MPI on a cluster that has been installed with mpich-
gm  MPI.
I have followed the steps on your website.
I can compile and run the Hello_c application correctly.
But, how can I make sure that the application is run by Open MPI not by mpich-
gm MPI ?
I have changed PATH and LD_LIBRARY_PATH:
I deleted /opt/mpich-gm/bin from PATH and added
/ptmp/myname/openmpi123/ompi123_install/bin/ into PATH.
LD_LIBRARY_PATH=/ptmp/myname/openmpi123/ompi123_install/lib
And then, I got
-bash-3.00$ which mpirun
/ptmp/myname/openmpi123/ompi123_install/bin/mpirun
In my job script , I used
&quot;time mpirun -np 16  /ptmp/jxding/openmpi123/openmpi-1.2.3/examples/hello_c&quot;
Then I added &quot;which mpirun&quot; in my job script, and then submited my job to the
cluster , I got :
====================================
/opt/mpich-gm/bin/mpirun
Hello, world, I am 0 of 1
Hello, world, I am 0 of 1
Hello, world, I am 0 of 1
Hello, world, I am 0 of 1
Hello, world, I am 0 of 1
Hello, world, I am 0 of 1
Hello, world, I am 0 of 1
Hello, world, I am 0 of 1
Hello, world, I am 0 of 1
Hello, world, I am 0 of 1
Hello, world, I am 0 of 1
Hello, world, I am 0 of 1
Hello, world, I am 0 of 1
Hello, world, I am 0 of 1
Hello, world, I am 0 of 1
Hello, world, I am 0 of 1
0.117u 0.165s 0:09.54 2.8%      0+0k 0+0io 0pf+0w
====================================
So , it means that the application is still using MPICH-GM not Open MPI.
Would you please help me with that ?
thanks,
Tony
June 16  2008
_________________________________________________________________
Now you can invite friends from Facebook and other groups to join you on Windows Live? Messenger. Add now.
<a href="https://www.invite2messenger.net/im/?source=TXT_EML_WLH_AddNow_Now">https://www.invite2messenger.net/im/?source=TXT_EML_WLH_AddNow_Now</a>
-------------- next part --------------
HTML attachment scrubbed and removed
------------------------------
Message: 5
Date: Mon, 16 Jun 2008 19:05:06 +0200
From: Andreas Sch?fer &lt;gentryx_at_[hidden]&gt;
Subject: Re: [OMPI users] help me please, about Open MPI
To: Open MPI Users &lt;users_at_[hidden]&gt;
Message-ID: &lt;20080616170506.GB7069_at_[hidden]&gt;
Content-Type: text/plain; charset=&quot;iso-8859-1&quot;
Dear Mister Smith,
Thank you for installing Open MPI.
On 12:51 Mon 16 Jun     , Tony Smith wrote:
&gt; I have changed PATH and LD_LIBRARY_PATH:
Please be aware that you have to make those changes within your job
script. Otherwise they will only affect your local shell.
&gt; But, how can I make sure that the application is run by Open MPI not by mpich-
You could enforce a certain mpirun by using its absolute path, e.g
&quot;/ptmp/myname/openmpi123/ompi123_install/bin/mpirun foo&quot; instead of
just &quot;mpirun foo&quot;.
&gt; I deleted /opt/mpich-gm/bin from PATH and added
You should not need to delete, just add in front of MPICH.
&gt; Would you please help me with that ?
I utterly hope I just did.
Most sincerely yours ;-)
-Andreas
--
============================================
Andreas Sch?fer
Cluster and Metacomputing Working Group
Friedrich-Schiller-Universit?t Jena, Germany
PGP/GPG key via keyserver
I'm a bright... <a href="http://www.the-brights.net">http://www.the-brights.net</a>
============================================
(\___/)
(+'.'+)
(&quot;)_(&quot;)
This is Bunny. Copy and paste Bunny into your
signature to help him gain world domination!
-------------- next part --------------
A non-text attachment was scrubbed...
Name: not available
Type: application/pgp-signature
Size: 197 bytes
Desc: not available
URL: &lt;<a href="http://www.open-mpi.org/MailArchives/users/attachments/20080616/ab34ce85/attachment.bin">http://www.open-mpi.org/MailArchives/users/attachments/20080616/ab34ce85/attachment.bin</a>&gt;&lt;<a href="http://www.open-mpi.org/MailArchives/users/attachments/20080616/ab34ce85/attachment.bin">http://www.open-mpi.org/MailArchives/users/attachments/20080616/ab34ce85/attachment.bin</a>&gt;
------------------------------
_______________________________________________
users mailing list
users_at_[hidden]
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
End of users Digest, Vol 923, Issue 4
*************************************
--
V. Gregory Weirs
Sandia National Laboratories                vgweirs_at_[hidden]
P.O.Box 5800, MS 0378                        phone: 505 845 2032
Albuquerque, NM 87185-0378              fax: 505 284 0154
</pre>
<p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-5890/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5891.php">Jeff Squyres: "Re: [OMPI users] locked  memory problem"</a>
<li><strong>Previous message:</strong> <a href="5889.php">Tony Smith: "Re: [OMPI users] help me please, about Open MPI"</a>
<li><strong>Maybe in reply to:</strong> <a href="5883.php">Weirs, V Gregory: "[OMPI users] gfortran bindings apparently not built on mac os leopard"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5898.php">Jeff Squyres: "Re: [OMPI users] gfortran bindings apparently not built on mac os leopard"</a>
<li><strong>Reply:</strong> <a href="5898.php">Jeff Squyres: "Re: [OMPI users] gfortran bindings apparently not built on mac os leopard"</a>
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
