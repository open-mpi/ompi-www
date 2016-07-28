<?
$subject_val = "[OMPI users] Problem with MPI_File_read() (2)";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 14 18:51:01 2009" -->
<!-- isoreceived="20090414225101" -->
<!-- sent="Wed, 15 Apr 2009 00:50:55 +0200" -->
<!-- isosent="20090414225055" -->
<!-- name="Jovana Knezevic" -->
<!-- email="jovana.knezevic.83_at_[hidden]" -->
<!-- subject="[OMPI users] Problem with MPI_File_read() (2)" -->
<!-- id="9d13e50c0904141550k7734bf29v2e5655b54606a31d_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] Problem with MPI_File_read() (2)<br>
<strong>From:</strong> Jovana Knezevic (<em>jovana.knezevic.83_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-14 18:50:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8927.php">Eugene Loh: "Re: [OMPI users] Debugging memory use of Open MPI"</a>
<li><strong>Previous message:</strong> <a href="8925.php">Chris Gottbrath: "Re: [OMPI users] Debugging memory use of Open MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8928.php">Jeff Squyres: "Re: [OMPI users] Problem with MPI_File_read() (2)"</a>
<li><strong>Reply:</strong> <a href="8928.php">Jeff Squyres: "Re: [OMPI users] Problem with MPI_File_read() (2)"</a>
<li><strong>Maybe reply:</strong> <a href="8930.php">Jovana Knezevic: "Re: [OMPI users] Problem with MPI_File_read() (2)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Hi Jovana,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  825307441 is 0x31313131 in base 16 (hexadecimal), which is the string
</span><br>
<span class="quotelev1">&gt;  `1111' in ASCII. MPI_File_read reads in binary values (not ASCII) just
</span><br>
<span class="quotelev1">&gt;  as the standard functions read(2) and fread(3) do.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  So, your program is fine; however, your data file (first.dat) is not.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Cheers,
</span><br>
<span class="quotelev1">&gt;  Shaun
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Thank you very much, Shaun! Ok, now I realise it's really stupid that
<br>
I was trying so hard to get the result that I wanted :-)
<br>
Well, it seems it's not a problem if I'm just reading with
<br>
MPI_File_read and writing with MPI_File_write, but if I try to do some
<br>
calculations with the data I read, it doesn't work... Do you maybe
<br>
have some idea how one can deal with this ( I have an input file for
<br>
my project - much larger code than the sample I gave last time -
<br>
consisting of integers, doubles, characters and so on... Maybe it's a
<br>
silly question, but can I convert my input file somehow into something
<br>
so that it works? :-) Any ideas would help.
<br>
Thanks again.
<br>
<p>Cheers,
<br>
Jovana
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8927.php">Eugene Loh: "Re: [OMPI users] Debugging memory use of Open MPI"</a>
<li><strong>Previous message:</strong> <a href="8925.php">Chris Gottbrath: "Re: [OMPI users] Debugging memory use of Open MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8928.php">Jeff Squyres: "Re: [OMPI users] Problem with MPI_File_read() (2)"</a>
<li><strong>Reply:</strong> <a href="8928.php">Jeff Squyres: "Re: [OMPI users] Problem with MPI_File_read() (2)"</a>
<li><strong>Maybe reply:</strong> <a href="8930.php">Jovana Knezevic: "Re: [OMPI users] Problem with MPI_File_read() (2)"</a>
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
