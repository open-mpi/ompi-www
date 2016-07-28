<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Oct 31 13:40:18 2007" -->
<!-- isoreceived="20071031174018" -->
<!-- sent="Wed, 31 Oct 2007 18:40:12 +0100" -->
<!-- isosent="20071031174012" -->
<!-- name="Oleg Morajko" -->
<!-- email="olegmorajko_at_[hidden]" -->
<!-- subject="[OMPI users] How to construct a datatype over two different arrays?" -->
<!-- id="6ab5deaf0710311040r60862e46l9074a5da270668dd_at_mail.gmail.com" -->
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
<strong>From:</strong> Oleg Morajko (<em>olegmorajko_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-10-31 13:40:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4364.php">Karsten Bolding: "Re: [OMPI users] problems running parallel program"</a>
<li><strong>Previous message:</strong> <a href="4362.php">Jeff Squyres: "Re: [OMPI users] problems running parallel program"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4365.php">Amit Kumar Saha: "Re: [OMPI users] How to construct a datatype over two different arrays?"</a>
<li><strong>Reply:</strong> <a href="4365.php">Amit Kumar Saha: "Re: [OMPI users] How to construct a datatype over two different arrays?"</a>
<li><strong>Reply:</strong> <a href="4374.php">George Bosilca: "Re: [OMPI users] How to construct a datatype over two different arrays?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>I have the following problem. There areI two arrays somewere in the program:
<br>
<p>double weights [MAX_SIZE];
<br>
...
<br>
int       values [MAX_SIZE];
<br>
...
<br>
<p>I need to be able to send a single pair { weights [i], values [i] } with a
<br>
single MPI_Send call Or receive it directly into both arrays at at given
<br>
index i. How can I define a datatype that spans this pair over both arrays?
<br>
<p>The only additional constraint it the fact that the memory location of both
<br>
arrays is fixed and cannot be changed and I should avoid extra copies.
<br>
<p>Is it possible?
<br>
<p>Any help welcome,
<br>
Oleg Morajko
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-4363/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4364.php">Karsten Bolding: "Re: [OMPI users] problems running parallel program"</a>
<li><strong>Previous message:</strong> <a href="4362.php">Jeff Squyres: "Re: [OMPI users] problems running parallel program"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4365.php">Amit Kumar Saha: "Re: [OMPI users] How to construct a datatype over two different arrays?"</a>
<li><strong>Reply:</strong> <a href="4365.php">Amit Kumar Saha: "Re: [OMPI users] How to construct a datatype over two different arrays?"</a>
<li><strong>Reply:</strong> <a href="4374.php">George Bosilca: "Re: [OMPI users] How to construct a datatype over two different arrays?"</a>
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
