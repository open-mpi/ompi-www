<?
$subject_val = "[OMPI users] Problem with setting up openmpi-1.4.3";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 12 19:17:27 2011" -->
<!-- isoreceived="20110412231727" -->
<!-- sent="Tue, 12 Apr 2011 19:17:23 -0400" -->
<!-- isosent="20110412231723" -->
<!-- name="amosleff_at_[hidden]" -->
<!-- email="amosleff_at_[hidden]" -->
<!-- subject="[OMPI users] Problem with setting up openmpi-1.4.3" -->
<!-- id="BANLkTim0a1DAtRtyX=oUze7J3rzka2N_4w_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] Problem with setting up openmpi-1.4.3<br>
<strong>From:</strong> <a href="mailto:amosleff_at_[hidden]?Subject=Re:%20[OMPI%20users]%20Problem%20with%20setting%20up%20openmpi-1.4.3"><em>amosleff_at_[hidden]</em></a><br>
<strong>Date:</strong> 2011-04-12 19:17:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16209.php">Jeff Squyres: "Re: [OMPI users] Problem with setting up openmpi-1.4.3"</a>
<li><strong>Previous message:</strong> <a href="16207.php">Rainer Keller: "Re: [OMPI users] &quot;Value out of bounds in file&quot; error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16209.php">Jeff Squyres: "Re: [OMPI users] Problem with setting up openmpi-1.4.3"</a>
<li><strong>Reply:</strong> <a href="16209.php">Jeff Squyres: "Re: [OMPI users] Problem with setting up openmpi-1.4.3"</a>
<li><strong>Reply:</strong> <a href="16215.php">Eugene Loh: "Re: [OMPI users] Problem with setting up openmpi-1.4.3"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;I am embarrassed!  I submitted a note to the users on setting up
<br>
openmpi-1.4.3 using SUSE-11.3 under Linux and received several replies.  I
<br>
wanted to transfer them but they disappeared for no apparent reason.   I
<br>
hope that those that sent me messages will be kind enough to repeat them and
<br>
perhaps more users will add their ideas.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;I am running SUSE-11.3 under VMware-7.1 and downloaded the openmpi
<br>
program.  The &quot;configuration...&quot; step went fine but the &quot;make all install&quot;
<br>
step hung up as shown below.
<br>
<p>mpragma_c.Tpo -c -o ompragma_c.o ompragma_c.cc
<br>
/usr/include/c++/4.5/iomanip(64): error: expected an expression
<br>
&nbsp;&nbsp;&nbsp;&nbsp;{ return {  __mask }; }
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
<p>/usr/include/c++/4.5/iomanip(94): error: expected an expression
<br>
&nbsp;&nbsp;&nbsp;&nbsp;{ return { __mask }; }
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
<p>/usr/include/c++/4.5/iomanip(125): error: expected an expression
<br>
&nbsp;&nbsp;&nbsp;&nbsp;{ return { __base }; }
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
<p>/usr/include/c++/4.5/iomanip(193): error: expected an expression
<br>
&nbsp;&nbsp;&nbsp;&nbsp;{ return { __n }; }
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
<p>/usr/include/c++/4.5/iomanip(223): error: expected an expression
<br>
&nbsp;&nbsp;&nbsp;&nbsp;{ return { __n }; }
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
<p>/usr/include/c++/4.5/iomanip(163): error: expected an expression
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{ return { __c }; }
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
<p>compilation aborted for ompragma_c.cc (code 2)
<br>
make[7]: *** [ompragma_c.o] Error 2
<br>
make[7]: Leaving directory
<br>
`/home/amos/Downloads/openmpi-1.4.3/ompi/contrib/vt/vt/tools/opari/tool'
<br>
make[6]: *** [all-recursive] Error 1
<br>
make[6]: Leaving directory
<br>
`/home/amos/Downloads/openmpi-1.4.3/ompi/contrib/vt/vt/tools/opari'
<br>
make[5]: *** [all-recursive] Error 1
<br>
make[5]: Leaving directory
<br>
`/home/amos/Downloads/openmpi-1.4.3/ompi/contrib/vt/vt/tools'
<br>
make[4]: *** [all-recursive] Error 1
<br>
make[4]: Leaving directory
<br>
`/home/amos/Downloads/openmpi-1.4.3/ompi/contrib/vt/vt'
<br>
make[3]: *** [all] Error 2
<br>
make[3]: Leaving directory
<br>
`/home/amos/Downloads/openmpi-1.4.3/ompi/contrib/vt/vt'
<br>
make[2]: *** [all-recursive] Error 1
<br>
make[2]: Leaving directory
<br>
`/home/amos/Downloads/openmpi-1.4.3/ompi/contrib/vt'
<br>
make[1]: *** [all-recursive] Error 1
<br>
make[1]: Leaving directory `/home/amos/Downloads/openmpi-1.4.3/ompi'
<br>
make: *** [all-recursive] Error 1
<br>
<p>I have looked at the program but don't see anything obviously wrong.
<br>
Hopefully somebody who is familiar with the program will see what the
<br>
problem is.  Any help would be much appreciated.
<br>
<p>Amos Leffler
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-16208/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16209.php">Jeff Squyres: "Re: [OMPI users] Problem with setting up openmpi-1.4.3"</a>
<li><strong>Previous message:</strong> <a href="16207.php">Rainer Keller: "Re: [OMPI users] &quot;Value out of bounds in file&quot; error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16209.php">Jeff Squyres: "Re: [OMPI users] Problem with setting up openmpi-1.4.3"</a>
<li><strong>Reply:</strong> <a href="16209.php">Jeff Squyres: "Re: [OMPI users] Problem with setting up openmpi-1.4.3"</a>
<li><strong>Reply:</strong> <a href="16215.php">Eugene Loh: "Re: [OMPI users] Problem with setting up openmpi-1.4.3"</a>
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
