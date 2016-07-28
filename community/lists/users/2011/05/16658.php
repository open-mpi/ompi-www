<?
$subject_val = "Re: [OMPI users] openmpi (1.2.8 or above) and Intel composer XE 2011 (aka 12.0)";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May 30 13:06:03 2011" -->
<!-- isoreceived="20110530170603" -->
<!-- sent="Mon, 30 May 2011 19:05:57 +0200" -->
<!-- isosent="20110530170557" -->
<!-- name="Salvatore Podda" -->
<!-- email="salvatore.podda_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi (1.2.8 or above) and Intel composer XE 2011 (aka 12.0)" -->
<!-- id="5C28EEC5-5A06-42FF-A987-2D79E172121D_at_enea.it" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="[OMPI users] openmpi (1.2.8 or above) and Intel composer XE 2011 (aka 12.0)" -->
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
<strong>Subject:</strong> Re: [OMPI users] openmpi (1.2.8 or above) and Intel composer XE 2011 (aka 12.0)<br>
<strong>From:</strong> Salvatore Podda (<em>salvatore.podda_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-05-30 13:05:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16659.php">hi: "[OMPI users] mpi.h:: OMPI_HAVE_FORTRAN_LOGICAL / INTEGER / REAL are set to 0 (zero)"</a>
<li><strong>Previous message:</strong> <a href="16657.php">hi: "Re: [OMPI users] Windows: MPI_Allreduce() crashes when using MPI_DOUBLE_PRECISION"</a>
<li><strong>Maybe in reply to:</strong> <a href="16498.php">Salvatore Podda: "[OMPI users] openmpi (1.2.8 or above) and Intel composer XE 2011 (aka 12.0)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks for enlightening discussion. Sorry to be late.
<br>
However for the sake of clarity I have two more additional comments.
<br>
<p>As I replied to Gus it was just a typo, I use to add to the mpirun  
<br>
invokation
<br>
the full string --mca btl openib,self,sm.
<br>
However, as pointed out along the thread, I feel a little bit  
<br>
unconfortable
<br>
with what the two mentioned FAQ seem to suggest to a newbie (like I feel
<br>
now!).
<br>
<p>As far as concern the
<br>
<p><a href="http://www.open-mpi.org/faq/?category=tuning#selecting-components">http://www.open-mpi.org/faq/?category=tuning#selecting-components</a>
<br>
<p>only at the end is well stated that the esclusion of a componente (^tcp)
<br>
is equivalent to select all the others, at first sight, in the past, I  
<br>
believed
<br>
that it ment use &quot;openib&quot; probably because I was thinking of my fabric
<br>
which gets only this two component. The other question which is clearly
<br>
stated (but a little bit hidden, IMHO) in the same sentence is:
<br>
<p>&nbsp;&nbsp;&quot;use only the self, sm, and openib components&quot;
<br>
<p>which finally says that all other component not included in the btl  
<br>
parameter
<br>
are positively excluded.
<br>
<p>Also the second mentioned FAQ:
<br>
<p><a href="http://www.open-mpi.org/faq/?category=openfabrics#ib-btl">http://www.open-mpi.org/faq/?category=openfabrics#ib-btl</a>
<br>
<p>is in my opinion misleading, as Gus pointed out.
<br>
While there is a special reference to the `self' component nothing is  
<br>
said about the `sm' one.
<br>
Most of the users (and also the most part of my younger co-workers at  
<br>
which this post is
<br>
specially dedicated) founding on the  &quot;Law of Least Astonishment&quot;  and  
<br>
on the last lines fo the FAQ where is said:
<br>
<p><p><span class="quotelev1">&gt; Finally, note that if the openib component is available at run time,  
</span><br>
<span class="quotelev1">&gt; Open MPI should automatically use it by default (ditto for self).  
</span><br>
<span class="quotelev1">&gt; Hence, it's usuallyunnecessary to specify these options on the  
</span><br>
<span class="quotelev1">&gt; mpirun command line. They are typically only used when you want to  
</span><br>
<span class="quotelev1">&gt; be absolutely positively definitely sure to use the specific BTL.
</span><br>
<p><p><p>assume that the `sm' flag is even included by default.
<br>
At the end,  just for curiosity, as most part of applications show to  
<br>
work with only
<br>
&quot;openib,self&quot; flags, what &quot;physycally&quot; happen to the &quot;intranode&quot; MPI  
<br>
messages?
<br>
<p>Thanks a lot
<br>
<p>Salvatore Podda
<br>
<p><p><p><p>Eugene Loh wrote:
<br>
<span class="quotelev1"> &gt; On 5/27/2011 4:32 AM, Jeff Squyres wrote:
</span><br>
<span class="quotelev2"> &gt;&gt; On May 27, 2011, at 4:30 AM, Robert Horton wrote:
</span><br>
<span class="quotelev4"> &gt;&gt;&gt;&gt; To be clear, if you explicitly list which BTLs to use, OMPI will  
</span><br>
only
<br>
<span class="quotelev4"> &gt;&gt;&gt;&gt; (try to) use exactly those and no others.
</span><br>
<span class="quotelev3"> &gt;&gt;&gt; It might be worth putting the sm btl in the FAQ:
</span><br>
<span class="quotelev3"> &gt;&gt;&gt;
</span><br>
<span class="quotelev3"> &gt;&gt;&gt; <a href="http://www.open-mpi.org/faq/?category=openfabrics#ib-btl">http://www.open-mpi.org/faq/?category=openfabrics#ib-btl</a>
</span><br>
<span class="quotelev2"> &gt;&gt; Is this entry not clear enough?
</span><br>
<span class="quotelev2"> &gt;&gt;
</span><br>
<span class="quotelev2"> &gt;&gt; <a href="http://www.open-mpi.org/faq/?category=tuning#selecting-components">http://www.open-mpi.org/faq/?category=tuning#selecting-components</a>
</span><br>
<span class="quotelev1"> &gt; I think his point is that the example in the ib-btl entry would be  
</span><br>
more
<br>
<span class="quotelev1"> &gt; helpful as a template for usage if it added sm. Why point users to a
</span><br>
<span class="quotelev1"> &gt; different FAQ entry (which we don't do anyhow) when three more
</span><br>
<span class="quotelev1"> &gt; characters &quot;,sm&quot; makes the ib-btl entry so much more helpful.
</span><br>
<span class="quotelev1"> &gt; _______________________________________________
</span><br>
<span class="quotelev1"> &gt; users mailing list
</span><br>
<span class="quotelev1"> &gt; users_at_[hidden]
</span><br>
<span class="quotelev1"> &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
Hi Jeff, list
<br>
I agree with Eugene and Robert.
<br>
By all means, please add &quot;,sm&quot; to &quot;openib,self&quot; in:
<br>
<a href="http://www.open-mpi.org/faq/?category=openfabrics#ib-btl">http://www.open-mpi.org/faq/?category=openfabrics#ib-btl</a>
<br>
I am yet to see a situation where you want to run with openib and self,
<br>
but exclude sm (except for testing, perhaps when memcpy is broken).
<br>
Maybe that is what led Salvatore Podda think there was a
<br>
&quot;Law of Least Astonishment&quot; behind the mca parameters syntax,
<br>
which would insert &quot;sm&quot; automatically to the other two btl,
<br>
which is not really the case.
<br>
Like Salvatore, I've got confused by the mca parameter
<br>
syntax in the past also.
<br>
My recollection is that Jeff wrote the second
<br>
FAQ to placate my whining in the list about
<br>
to sm or not to sm.
<br>
However, the second FAQ clarifies the mca parameter logic,
<br>
along with the role of the &quot;^&quot; clause, and IMHO should be kept there:
<br>
<a href="http://www.open-mpi.org/faq/?category=tuning#selecting-components">http://www.open-mpi.org/faq/?category=tuning#selecting-components</a>
<br>
My two cents,
<br>
Gus Correa
<br>
<p><p><p><p><p>==================================================
<br>
Investi nel futuro. Investi nelle nostre ricerche.
<br>
Destina il 5 x 1000 all'ENEA
<br>
Cerchiamo:
<br>
- nuove fonti e nuovi modi per produrre energia pulita e sicura.
<br>
- modi migliori per utilizzare e risparmiare energia.
<br>
- metodologie e tecnologie per innovare e rendere piu' competitivo il sistema produttivo nazionale.
<br>
- metodologie e tecnologie per la salvaguardia e il recupero dell'ambiente e per la tutela della nostra salute e del patrimonio artistico del Paese.
<br>
Il nostro codice fiscale e': 01320740580
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16659.php">hi: "[OMPI users] mpi.h:: OMPI_HAVE_FORTRAN_LOGICAL / INTEGER / REAL are set to 0 (zero)"</a>
<li><strong>Previous message:</strong> <a href="16657.php">hi: "Re: [OMPI users] Windows: MPI_Allreduce() crashes when using MPI_DOUBLE_PRECISION"</a>
<li><strong>Maybe in reply to:</strong> <a href="16498.php">Salvatore Podda: "[OMPI users] openmpi (1.2.8 or above) and Intel composer XE 2011 (aka 12.0)"</a>
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
