<?
$subject_val = "Re: [OMPI users] Problem with MPI_File_read() (2)";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 14 20:25:20 2009" -->
<!-- isoreceived="20090415002520" -->
<!-- sent="Tue, 14 Apr 2009 20:25:14 -0400" -->
<!-- isosent="20090415002514" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem with MPI_File_read() (2)" -->
<!-- id="4F58F443-ABDD-443E-9EA1-E4F47C8BEAAA_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="9d13e50c0904141550k7734bf29v2e5655b54606a31d_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problem with MPI_File_read() (2)<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-14 20:25:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8929.php">Chris Gottbrath: "Re: [OMPI users] Debugging memory use of Open MPI"</a>
<li><strong>Previous message:</strong> <a href="8927.php">Eugene Loh: "Re: [OMPI users] Debugging memory use of Open MPI"</a>
<li><strong>In reply to:</strong> <a href="8926.php">Jovana Knezevic: "[OMPI users] Problem with MPI_File_read() (2)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8930.php">Jovana Knezevic: "Re: [OMPI users] Problem with MPI_File_read() (2)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
In general, files written by MPI_File_write (and friends) are only  
<br>
guaranteed to be readable by MPI_File_read (and friends).  So if you  
<br>
have an ASCII input file, or even a binary input file, you might need  
<br>
to read it in with traditional/unix file read functions and then write  
<br>
it out with MPI_File_write.  Then your parallel application will be  
<br>
able to use the various MPI_File_* functions to read the file at run- 
<br>
time.  Hence, there's no real generic &lt;non-MPI-file&gt; -&gt; &lt;MPI-file&gt;  
<br>
convertor; you'll need to write your own that is specific to your data.
<br>
<p>Make sense?
<br>
<p><p>On Apr 14, 2009, at 6:50 PM, Jovana Knezevic wrote:
<br>
<p><span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;  Hi Jovana,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;  825307441 is 0x31313131 in base 16 (hexadecimal), which is the  
</span><br>
<span class="quotelev1">&gt; string
</span><br>
<span class="quotelev2">&gt; &gt;  `1111' in ASCII. MPI_File_read reads in binary values (not ASCII)  
</span><br>
<span class="quotelev1">&gt; just
</span><br>
<span class="quotelev2">&gt; &gt;  as the standard functions read(2) and fread(3) do.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;  So, your program is fine; however, your data file (first.dat) is  
</span><br>
<span class="quotelev1">&gt; not.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;  Cheers,
</span><br>
<span class="quotelev2">&gt; &gt;  Shaun
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank you very much, Shaun! Ok, now I realise it's really stupid that
</span><br>
<span class="quotelev1">&gt; I was trying so hard to get the result that I wanted :-)
</span><br>
<span class="quotelev1">&gt; Well, it seems it's not a problem if I'm just reading with
</span><br>
<span class="quotelev1">&gt; MPI_File_read and writing with MPI_File_write, but if I try to do some
</span><br>
<span class="quotelev1">&gt; calculations with the data I read, it doesn't work... Do you maybe
</span><br>
<span class="quotelev1">&gt; have some idea how one can deal with this ( I have an input file for
</span><br>
<span class="quotelev1">&gt; my project - much larger code than the sample I gave last time -
</span><br>
<span class="quotelev1">&gt; consisting of integers, doubles, characters and so on... Maybe it's a
</span><br>
<span class="quotelev1">&gt; silly question, but can I convert my input file somehow into something
</span><br>
<span class="quotelev1">&gt; so that it works? :-) Any ideas would help.
</span><br>
<span class="quotelev1">&gt; Thanks again.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; Jovana
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8929.php">Chris Gottbrath: "Re: [OMPI users] Debugging memory use of Open MPI"</a>
<li><strong>Previous message:</strong> <a href="8927.php">Eugene Loh: "Re: [OMPI users] Debugging memory use of Open MPI"</a>
<li><strong>In reply to:</strong> <a href="8926.php">Jovana Knezevic: "[OMPI users] Problem with MPI_File_read() (2)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8930.php">Jovana Knezevic: "Re: [OMPI users] Problem with MPI_File_read() (2)"</a>
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
